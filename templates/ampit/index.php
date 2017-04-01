<?php defined('_JEXEC') or die;
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;
// Getting params from template
$params = $app->getTemplate(true)->params;
// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/bootstrap/javascripts/bootstrap.min.js');
// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/bootstrap/stylesheets/bootstrap.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/css/fonts.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/css/template.css');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=0.75" />
	<jdoc:include type="head" />
	<!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">

<div class="body">

    <div class="TopNav">
        <div class="white-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="logo">
                            <a href="<?php echo JUri::base() ?>">
                                <img src="<?php echo $params->get('tmpl_logo', $this->baseurl . '/templates/' . $this->template . '/assets/img/logo.png'); ?>" alt="AMP IT Logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="nav-top">
                            <jdoc:include type="modules" name="nav-top" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pageTitle">
            <div class="container">
                <div class="wrap">
                    <div class="t1"><?php echo $params->get('tmpl_header'); ?></div>
                    <div class="t2"><?php echo $params->get('tmpl_slogan'); ?></div>
                    <div class="t3"><?php echo $params->get('tmpl_description'); ?></div>
                    <a class="signup" href="<?php echo $params->get('singup_link', JUri::base()); ?>"><?php echo $params->get('singup_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <jdoc:include type="modules" name="pre-content" />
    <main id="content" role="main">
        <!-- Begin Content -->
        <jdoc:include type="message" />
        <jdoc:include type="component" />
        <!-- End Content -->
    </main>
    <jdoc:include type="modules" name="after-content" />
    <jdoc:include type="modules" name="footer" />
</div>



</body>
</html>
