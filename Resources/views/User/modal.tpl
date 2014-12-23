<!-- Modal -->
<div class="modal fade" id="breakItModal" tabindex="-1" role="dialog" aria-labelledby="breakItModalLabel" aria-hidden="true">
    <div class="modal-dialog {if $serviceManager.env eq 'dev'}modal-lg{/if}">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="breakItModalLabel">Ajax Result</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{pageaddvar name='javascript' value='jQuery'}
{pageaddvar name='javascript' value='@ZikulaBreakItModule/Resources/public/js/Zikula.BreakIt.User.View.js'}
