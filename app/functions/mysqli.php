<?php
// db config 
$GLOBALS['config']['db']['db_host'] = 
$GLOBALS['config']['db']['db_port'] = env('DB_PORT', '3306');
$GLOBALS['config']['db']['db_user'] = env('DB_USERNAME', 'bigtran');
$GLOBALS['config']['db']['db_password'] = env('DB_PASSWORD', 'password');
$GLOBALS['config']['db']['db_name'] = env('DB_DATABASE', 'translog');


// db functions
function db_mysqli( $host = null , $port = null , $user = null , $password = null , $db_name = null )
{
	$db_key = MD5( $host .'-'. $port .'-'. $user .'-'. $password .'-'. $db_name  );
	
	if( !isset( $GLOBALS['LP_'.$db_key] ) )
	{
		@include_once( CONFIG_PROJECT );
		
		$db_config = $GLOBALS['config']['db'];
		
		if( $host == null ) $host = $db_config['db_host'];
		if( $port == null ) $port = $db_config['db_port'];
		if( $user == null ) $user = $db_config['db_user'];
		if( $password == null ) $password = $db_config['db_password'];
		if( $db_name == null ) $db_name = $db_config['db_name'];
		// mysqli_connect(host,username,password,dbname,port,socket);
		//echo $host.'===='.$port.'===='.$user.'===='.$password.'===='.$db_name;
		if( !$GLOBALS['LP_'.$db_key] = mysqli_connect( $host , $user , $password ,''  , $port ,'/tmp/mysql.sock' ) )
		{
			echo 'can\'t connect to database';
			return false;
		}
		else
		{
			if( $db_name != '' )
			{
				if( !mysqli_select_db( $GLOBALS['LP_'.$db_key] , $db_name ) )
				{
					echo 'can\'t select database ' . $db_name ;
					return false;
				}
			}
		}
		
		mysqli_query( $GLOBALS['LP_'.$db_key] , "SET NAMES 'UTF8'"  );
	}
	
	return $GLOBALS['LP_'.$db_key];
}

function s( $str , $db_mysqli = NULL )
{
	if( $db_mysqli == NULL ) $db_mysqli = db_mysqli();
	return  mysqli_real_escape_string( $db_mysqli , $str )  ;
	
}

// $sql = "SELECT * FROM `user` WHERE `name` = ?s AND `id` = ?i LIMIT 1 "
function prepare( $sql , $array )
{
	
	foreach( $array as $k=>$v )
		$array[$k] = s($v );
	
	$reg = '/\?([is])/i';
	$sql = preg_replace_callback( $reg , 'prepair_string' , $sql  );
	$count = count( $array );
	for( $i = 0 ; $i < $count; $i++ )
	{
		$str[] = '$array[' .$i . ']';	
	}
	
	$statement = '$sql = sprintf( $sql , ' . join( ',' , $str ) . ' );';
	eval( $statement );
	return $sql;
	
}

function prepair_string( $matches )
{
	if( $matches[1] == 's' ) return "'%s'";
	if( $matches[1] == 'i' ) return "'%d'";	
}


function get_data( $sql , $db_mysqli = NULL )
{
	if( $db_mysqli == NULL ) $db_mysqli = db_mysqli();
	
	$GLOBALS['LP_LAST_SQL'] = $sql;
	$data = Array();
	$i = 0;
	$result = mysqli_query( $db_mysqli , $sql );
	
	if( mysqli_errno( $db_mysqli ) != 0 )
		echo mysqli_error( $db_mysqli ) .' ' . $sql;
	
	while( $Array = mysqli_fetch_array($result, MYSQLI_ASSOC ) )
	{
		$data[$i++] = $Array;
	}
	
	if( mysqli_errno( $db_mysqli ) != 0 )
		echo mysqli_error( $db_mysqli ) .' ' . $sql;
	
	mysqli_free_result($result); 

	if( count( $data ) > 0 )
		return $data;
	else
		return false;
}

function get_line( $sql , $db_mysqli = NULL )
{
	$data = get_data( $sql , $db_mysqli  );
	return @reset($data);
}

function get_var( $sql , $db_mysqli = NULL )
{
	$data = get_line( $sql , $db_mysqli );
	return $data[ @reset(@array_keys( $data )) ];
}

function last_id( $db_mysqli = NULL )
{
	if( $db_mysqli == NULL ) $db_mysqli = db_mysqli();
	return get_var( "SELECT LAST_INSERT_ID() " , $db_mysqli );
}

function run_sql( $sql , $db_mysqli = NULL )
{
	if( $db_mysqli == NULL ) $db_mysqli = db();
	$GLOBALS['LP_LAST_SQL'] = $sql;
	return mysqli_query( $db_mysqli , $sql  );
}

function db_errno( $db_mysqli = NULL )
{
	if( $db_mysqli == NULL ) $db_mysqli = db();
	return mysqli_errno( $db_mysqli );
}


function db_error( $db_mysqli = NULL )
{
	if( $db_mysqli == NULL ) $db_mysqli = db_mysqli();
	return mysqli_error( $db_mysqli );
}

function close_db( $db_mysqli = NULL )
{
	if( $db_mysqli == NULL )
		$db_mysqli = $GLOBALS['LP_'.$db_key];
		
	unset( $GLOBALS['LP_'.$db_key] );
	mysqli_close( $db_mysqli );
}

?>
