<h1><i class="fa fa-bomb"></i> Break It!</h1>
<div class="container text-center">
    <div class="well well-lg" style="width: 400px;">
        <div class="alert alert-info text-left">
            <ul>
                <li>Environment: {$serviceManager.env}</li>
                <li>Debug: {$serviceManager.debug}</li>
            </ul>
        </div>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='AccessDeniedException'}" role="button">Throw AccessDeniedException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='NotFoundHttpException'}" role="button">Throw NotFoundHttpException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='InvalidArgumentException'}" role="button">Throw InvalidArgumentException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='FatalErrorException'}" role="button">Throw FatalErrorException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='RuntimeException'}" role="button">Throw RuntimeException</a>
        <a class="btn btn-primary btn-lg btn-block" href="{route name='zikulabreakitmodule_user_index' break='Exception'}" role="button">Throw Exception</a>
    </div>
</div>