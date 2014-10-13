<!DOCTYPE HTML>
<?php 
	$doc = WpApiDoc::get_doc();
?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta name="viewport" content="width=device-width">
  <link rel="canonical" href="<?php echo add_query_arg(array()) ?>" />
  <title><?php echo get_the_title($doc->intro) ?></title>
  <style>
    body {
      font-size: 14px;
      line-height: 22px;
      font-family: Helvetica Neue, Helvetica, Arial;
      background: #f4f4f4 url(docs/images/background.png);
    }
    .interface {
      font-family: "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, sans-serif !important;
    }
    div#sidebar {
      background: #fff;
      position: fixed;
      z-index: 10;
      top: 0; left: 0; bottom: 0;
      width: 200px;
      overflow-y: auto;
      overflow-x: hidden;
      -webkit-overflow-scrolling: touch;
      padding: 15px 0 30px 30px;
      border-right: 1px solid #bbb;
      box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; -moz-box-shadow: 0 0 20px #ccc;
    }
      a.toc_title, a.toc_title:visited {
        display: block;
        color: black;
        font-weight: bold;
        margin-top: 15px;
      }
        a.toc_title:hover {
          text-decoration: underline;
        }
        #sidebar .version {
          font-size: 10px;
          font-weight: normal;
        }
      ul.toc_section {
        font-size: 11px;
        line-height: 14px;
        margin: 5px 0 0 0;
        padding-left: 0px;
        list-style-type: none;
        font-family: Lucida Grande;
      }
        .toc_section li {
          cursor: pointer;
          margin: 0 0 3px 0;
        }
          .toc_section li a {
            text-decoration: none;
            color: black;
          }
            .toc_section li a:hover {
              text-decoration: underline;
            }
    div.container {
      position: relative;
      width: 550px;
      margin: 40px 0 50px 260px;
    }
    img#logo {
      width: 450px;
      height: 80px;
    }
    div.run {
      position: absolute;
      right: 15px;
      width: 26px; height: 18px;
      background: url('docs/images/arrows.png') no-repeat -26px 0;
    }
      div.run:active {
        background-position: -51px 0;
      }
    p, div.container ul {
      margin: 25px 0;
      width: 550px;
    }
      p.warning {
        font-size: 12px;
        line-height: 18px;
        font-style: italic;
      }
      div.container ul {
        list-style: circle;
        padding-left: 15px;
        font-size: 13px;
        line-height: 18px;
      }
        div.container ul li {
          margin-bottom: 10px;
        }
        div.container ul.small {
          font-size: 12px;
        }
    a, a:visited {
      color: #444;
    }
    a:active, a:hover {
      color: #000;
    }
    a.punch {
      display: inline-block;
      background: #4162a8;
      border-top: 1px solid #38538c;
      border-right: 1px solid #1f2d4d;
      border-bottom: 1px solid #151e33;
      border-left: 1px solid #1f2d4d;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      -ms-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      -o-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      color: #fff;
      font: bold 14px "helvetica neue", helvetica, arial, sans-serif;
      line-height: 1;
      margin-bottom: 15px;
      padding: 8px 0 10px 0;
      text-align: center;
      text-shadow: 0px -1px 1px #1e2d4d;
      text-decoration: none;
      width: 225px;
      -webkit-background-clip: padding-box; }
      a.punch:hover {
        -webkit-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        -moz-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        -ms-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        -o-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        cursor: pointer; }
      a.punch:active {
        -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        -ms-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        -o-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        margin-top: 5px; margin-bottom: 10px }
    a img {
      border: 0;
    }
    a.travis-badge {
      display: block;
    }
    h1, h2, h3, h4, h5, h6 {
      padding-top: 20px;
    }
      h2 {
        font-size: 22px;
      }
    b.header {
      font-size: 18px;
      line-height: 35px;
    }
    span.alias {
      font-size: 14px;
      font-style: italic;
      margin-left: 20px;
    }
    table {
      margin: 15px 0 0; padding: 0;
    }
      tr, td {
        margin: 0; padding: 0;
      }
        td {
          padding: 0px 15px 5px 0;
        }
        table .rule {
          height: 1px;
          background: #ccc;
          margin: 5px 0;
        }
    code, pre, tt {
      font-family: Monaco, Consolas, "Lucida Console", monospace;
      font-size: 12px;
      line-height: 18px;
      font-style: normal;
    }
      tt {
        padding: 0px 3px;
        background: #fff;
        border: 1px solid #ddd;
        zoom: 1;
      }
      code {
        margin-left: 20px;
      }
      pre {
        font-size: 12px;
        padding: 2px 0 2px 15px;
        border: 4px solid #bbb; border-top: 0; border-bottom: 0;
        margin: 0px 0 25px;
      }
      img.example_image {
        margin: 0px auto;
      }
        img.example_retina {
          margin: 20px;
          box-shadow: 0 8px 15px rgba(0,0,0,0.4);
        }
    @media only screen and (-webkit-max-device-pixel-ratio: 1) and (max-width: 600px),
           only screen and (max--moz-device-pixel-ratio: 1) and (max-width: 600px) {
      div#sidebar {
        display: none;
      }
      img#logo {
        max-width: 450px;
        width: 100%;
        height: auto;
      }
      div.container {
        width: auto;
        margin-left: 15px;
        margin-right: 15px;
      }
        p, div.container ul {
          width: auto;
        }
    }
    @media only screen and (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 640px),
          only screen and (-o-min-device-pixel-ratio: 3/2) and (max-width: 640px),
          only screen and (min-device-pixel-ratio: 1.5) and (max-width: 640px) {
      img {
        max-width: 100%;
        height: auto;
      }
      div#sidebar {
        -webkit-overflow-scrolling: initial;
        position: relative;
        width: 90%;
        height: 120px;
        left: 0;
        top: -7px;
        padding: 10px 0 10px 30px;
        border: 0;
      }
      img#logo {
        width: auto;
        height: auto;
      }
      div.container {
        margin: 0;
        width: 100%;
      }
      p, div.container ul {
        max-width: 98%;
        overflow-x: scroll;
      }
      table {
        position: relative;
      }
        tr:first-child td {
          padding-bottom: 25px;
        }
        td.text {
          line-height: 12px;
          padding: 0;
          position: absolute;
          left: 0;
          top: 48px;
        }
        tr:last-child td.text {
          top: 122px;
        }
      pre {
        overflow: scroll;
      }
    }
  </style>
  <style>
  	.edit{
  		font-size:80%;
  		padding-left:1em;
  	}
  	h2 .edit{
  		font-size:50%
  	}
  	.item p:first-of-type{
  		margin-top:0;
  	}
  	.item p, div.container .item ul{
  		margin: 20px 0;
  	}
  </style>
</head>
<body>

  <div id="sidebar" class="interface">

    <a class="toc_title" href="#<?php echo WpApiDoc::get_dom_id($doc->intro) ?>">
      <?php echo get_the_title($doc->intro) ?>
    </a>
    <ul class="toc_section">
      <li>&raquo; <a href="https://github.com/mleroi/wp-ph/tree/master/wp-content/plugins/wp-phonecast/appli">GitHub Repository</a></li>
    </ul>

    <?php foreach($doc->headings as $heading): ?>
	    <a class="toc_title" href="#<?php echo WpApiDoc::get_dom_id($heading) ?>">
	      <?php echo get_the_title($heading) ?>
	    </a>
	    <ul class="toc_section">
	    	<?php foreach($heading->items as $item): ?>
	      		<li><a href="#<?php echo WpApiDoc::get_dom_id($item) ?>"><?php echo get_the_title($item) ?></a></li>
	      	<?php endforeach ?>
	    </ul>
	<?php endforeach ?>

  </div>

  <div class="container">
  
    <p>
      <!-- img id="logo" src="docs/images/backbone.png" alt="Backbone.js" />  -->
    </p>

    <h2 id="<?php echo WpApiDoc::get_dom_id($doc->intro) ?>"><?php echo WpApiDoc::get_title_with_edit_link($doc->intro) ?></h2>
    
    <?php echo WpApiDoc::get_content($doc->intro) ?>

	<?php foreach($doc->headings as $heading): ?>
		<h2 id="<?php echo WpApiDoc::get_dom_id($heading) ?>"><?php echo WpApiDoc::get_title_with_edit_link($heading) ?></h2>
	    <?php echo WpApiDoc::get_content($heading) ?>
	    <?php foreach($heading->items as $item): ?>
	    	<div id="<?php echo WpApiDoc::get_dom_id($item) ?>" class="item">
				<b class="header"><?php echo WpApiDoc::get_title($item) ?></b>
				<?php if( $usage = WpApiDoc::get_usage($item) ): ?>
					<code><?php echo $usage ?></code>
				<?php endif ?>
				<?php echo WpApiDoc::get_edit_link($item) ?>
	      		<?php echo WpApiDoc::get_content($item) ?>
      		</div>
		<?php endforeach ?>
	<?php endforeach ?>

  </div>

</body>
</html>