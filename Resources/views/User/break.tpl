<div class="container-fluid">
    <div class="row">
        <h1><i class="fa fa-bomb"></i> Break It! (unrouted!)</h1>
        {insert name="getstatusmsg"}
        <div class="col-xs-12 col-md-6">
            <div class="well well-lg text-center">
                <div class="alert alert-info text-left">
                    <ul>
                        <li>Environment: {$serviceManager.env}</li>
                        <li>Debug: {$serviceManager.debug|yesno}</li>
                        <li>Zikula shorturls: {$modvars.ZConfig.shorturls|yesno}</li>
                        <li>Zikula stripentrypoint: {$modvars.ZConfig.shorturlsstripentrypoint|yesno}</li>
                        <li>Zikula User logged In: {userloggedin|yesno}</li>
                    </ul>
                </div>
                <a class="btn btn-primary btn-lg btn-block" href="{$baseurl}I/AM/INVALID" role="button">Open invalid route</a>
                <a class="btn btn-primary btn-lg btn-block" href="{$baseurl}index.php?module=invalid&type=user&func=main" role="button">Open invalid url (old-style)</a>
                <div class="btn-group btn-block" style="padding-bottom:1em;">
                    <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        &nbsp;&nbsp;Throw Standard...&nbsp;&nbsp;&nbsp;<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='AccessDeniedException'}">AccessDeniedException</a></li>
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='NotFoundHttpException'}">NotFoundHttpException</a></li>
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='RouteNotFoundException'}">RouteNotFoundException</a></li>
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='InvalidArgumentException'}">InvalidArgumentException</a></li>
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='FatalErrorException'}">FatalErrorException</a></li>
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='RuntimeException'}">RuntimeException</a></li>
                        <li><a href="{modurl modname='BreakIt' type='user' func='break' break='Exception'}">Exception</a></li>
                    </ul>
                </div>
                {include file="ajaxform.html.twig"}
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="well well-sm text-center">
                <a class="btn btn-default btn-sm btn-block" href="{route name='zikulabreakitmodule_user_index'}" role="button">Old controller</a>
                <a class="btn btn-default btn-sm btn-block" href="{modurl modname='BreakIt' type='user' func='break'}" role="button">Old controller (unrouted)</a>
                <a class="btn btn-default btn-sm btn-block" href="{route name='zikulabreakitmodule_new_index'}" role="button">New controller</a>
                <a class="btn btn-info btn-sm btn-block" href="{route name='zikulabreakitmodule_form_test'}" role="button">Form Demo</a>
            </div>
        </div>
    </div>
</div>
{include file="User/modal.tpl"}