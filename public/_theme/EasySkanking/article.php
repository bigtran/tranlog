<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=_siteInfo("title");?></title>
    <link rel="stylesheet" href="<?=_themeUrl()?>css/main.css" />
    <script src="<?=_themeUrl()?>js/uikit.js"></script>
    <link rel="stylesheet" type="text/css"  href='<?=_themeUrl()?>assets/editor.md/css/editormd.preview.css' /> 

</head>

<body>

<?php require("inc/header.php");?>

<div class="uk-section">
	<div class="uk-container uk-container-xsmall">
		<article class="uk-article">
			<h1 class="uk-article-title"><?=$theArticle['meta']['title']?></h1>
			<div class="uk-article-meta uk-margin-top uk-margin-medium-bottom uk-flex uk-flex-middle">
				<div>
					Written by <?=$theArticle['meta']['author']?><br>
					<time datetime=""><?=$theArticle['meta']['date']?></time>
				</div>
			</div>


			<div class="article-content link-primary" id="article-content" style="padding: 0px;">
				<div class="entry-content-md" style="display: none;">
                <?=$theArticle['content']?>
                </div>
			</div>
			<hr class="uk-margin-medium">
			
		</article>
	</div>
</div>


<?php require("inc/footer.php");?>

<script src="<?=_themeUrl()?>js/awesomplete.js"></script>
<script src="<?=_themeUrl()?>js/custom.js"></script>

<script src="<?=_themeUrl()?>assets/editor.md/lib/marked.min.js"></script>
<script src="<?=_themeUrl()?>assets/editor.md/lib/prettify.min.js"></script>

<script src="<?=_themeUrl()?>assets/editor.md/lib/raphael.min.js"></script>
<script src="<?=_themeUrl()?>assets/editor.md/lib/underscore.min.js"></script>
<script src="<?=_themeUrl()?>assets/editor.md/lib/sequence-diagram.min.js"></script>
<script src="<?=_themeUrl()?>assets/editor.md/lib/flowchart.min.js"></script>
<script src="<?=_themeUrl()?>assets/editor.md/lib/jquery.flowchart.min.js"></script>
<script src="<?=_themeUrl()?>assets/editor.md/editormd.js"></script>
<script type="text/javascript">
    $(function() {
        var testEditormdView;

        testEditormdView = editormd.markdownToHTML("article-content", {
                markdown        : $(".entry-content-md").html(),
                //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
                htmlDecode      : "style,script,iframe",  // you can filter tags decode
                //toc             : false,
                tocm            : true,    // Using [TOCM]
                tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
                //gfm             : false,
                tocDropdown     : true,
                // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
                emoji           : true,
                taskList        : true,
                tex             : true,  // 默认不解析
                flowChart       : true,  // 默认不解析
                sequenceDiagram : true,  // 默认不解析
            });
    });
    
</script>

</body>

</html>