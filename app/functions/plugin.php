<?php
// **************************************************************
// * Plugins & hooks
// ************************************************************** 
function add_filter( $tag , $function_to_add , $priority = 10 , $accepted_args_num = 1 )
{
    return add_hook( $tag , $function_to_add , $priority , $accepted_args_num );
}

function add_action( $tag , $function_to_add , $priority = 10 , $accepted_args_num = 1 )
{
    return add_hook( $tag , $function_to_add , $priority , $accepted_args_num );
}

function add_hook( $tag , $function_to_add , $priority = 10 , $accepted_args_num = 1 )
{
    $tag = strtoupper($tag);
    $idx = build_hook_id( $tag , $function_to_add , $priority );
    $GLOBALS['TTHOOK'][$tag][$priority][$idx] = array( 'function' => $function_to_add , 'args_num' => $accepted_args_num );
}

function do_action( $tag , $value = null )
{
    return apply_hook( $tag , $value );
}

function apply_filter( $tag , $value = null )
{
    return apply_hook( $tag , $value );
}



function apply_hook( $tag , $value )
{
    $tag = strtoupper($tag);
    if( $hooks  = has_hook( $tag ) )
    {
        ksort( $hooks );
        $args = func_get_args();
        reset( $hooks );

        do
        {
            foreach( (array) current( $hooks ) as $hook )
            {
                if( !is_null($hook['function']) )
                {
                    $args[1] = $value;
                    $value = call_user_func_array( $hook['function'] , array_slice($args, 1, (int) $hook['args_num']));
                }
            }
        }while( next( $hooks ) !== false );

    }

    return $value;
}

function has_hook( $tag , $priority = null )
{
    $tag = strtoupper($tag);
    if( is_null($priority) ) return isset( $GLOBALS['TTHOOK'][$tag] )? $GLOBALS['TTHOOK'][$tag]:false;
    else return isset( $GLOBALS['TTHOOK'][$tag][$priority] )? $GLOBALS['TTHOOK'][$tag][$priority]:false;
}

function remove_hook( $tag , $priority = null )
{
    $tag = strtoupper($tag);
    if( is_null($priority) ) unset( $GLOBALS['TTHOOK'][$tag] );
    else unset( $GLOBALS['TTHOOK'][$tag][$priority] );
}
// This function is based on wordpress  
// from  https://raw.github.com/WordPress/WordPress/master/wp-includes/plugin.php
// requere php5.2+

function build_hook_id( $tag , $function ) 
{
    if ( is_string($function) )
        return $function;

    if ( is_object($function) ) 
    {
        // Closures are currently implemented as objects
        $function = array( $function, '' );
    }
    else
    {
        $function = (array) $function;
    }

    if (is_object($function[0]) ) 
    {
        // Object Class Calling
        if ( function_exists('spl_object_hash') ) 
        {
            return spl_object_hash($function[0]) . $function[1];
        }
        else
        {
            return substr( serialize($function[0]) , 0 , 15 ). $function[1];
        }

    }
    elseif( is_string($function[0]) )
    {
        // Static Calling
        return $function[0].$function[1];
    }
}

function scan_plugin_info()
{
    if( file_exists( c('plugin_path') ) )
    foreach( glob( c('plugin_path') . DS . "*" , GLOB_ONLYDIR ) as $pfold  )
    {
        $app_file = $pfold .DS .'app.php';
        if( file_exists( $app_file ) )
            if($pinfo = get_plugin_info( file_get_contents( $app_file ) ))
            $plist[] = $pinfo;
    }
    return isset( $plist ) ? $plist : false;
}

function get_plugin_info( $content )
{
    $reg = '/\*\*\*\s+(.+)\s+\*\*\*/is';
    if( preg_match( $reg , $content , $out ) )
    {
        $info_content = $out[1];
        $lines = explode('##',$info_content);
        array_shift($lines);
        foreach( $lines as $line )
        {
            $line = trim($line);
            list( $key , $value ) = explode( ' ' , $line , 2 );
            $ret[$key] = z(t($value)); 
        }

        if( isset($ret) )return $ret;

    }

    return false;
}

function ttpassv2( $password , $salt = '' )
{
    return substr( md5(md5( $password  ) . 'T!e*a-m^T$o#y' . $salt  ) , 0 , 30 );
}

?>