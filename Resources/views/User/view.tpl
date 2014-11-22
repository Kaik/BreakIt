<div class="container-fluid">
    <h1><i class="fa fa-bomb"></i> Break It!</h1>
    {insert name="getstatusmsg"}
    <div class="well well-lg text-center" style="width: 400px;">
        <div class="alert alert-info text-left">
            <ul>
                <li>Environment: {$serviceManager.env}</li>
                <li>Debug: {$serviceManager.debug|yesno}</li>
            </ul>
        </div>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='AccessDeniedException'}" role="button">Throw AccessDeniedException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='NotFoundHttpException'}" role="button">Throw NotFoundHttpException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='InvalidArgumentException'}" role="button">Throw InvalidArgumentException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='FatalErrorException'}" role="button">Throw FatalErrorException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='RuntimeException'}" role="button">Throw RuntimeException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='Exception'}" role="button">Throw Exception</a>
        <a class="btn btn-primary btn-lg btn-block" href="{$baseurl}I/AM/INVALID" role="button">Open invalid route</a>
        <a class="btn btn-primary btn-lg btn-block" href="{$baseurl}index.php?module=invalid&type=user&func=main" role="button">Open invalid url (old-style)</a>
    </div>
</div>