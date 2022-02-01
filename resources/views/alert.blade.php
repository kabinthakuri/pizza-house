<div class="row">
<div class="col-md-8"></div>
<div class="col-md-4">
    @if(Session('success'))
    <div class="alert alert-success">
    <button class="btn close" data-bs-dismiss="alert">x</button>
    <strong>{{Session('success')}}</strong></div>
    @endif

    @if(Session('info'))
    <div class="alert alert-info">
    <button class="btn close" data-bs-dismiss="alert">x</button>
    <strong>{{Session('info')}}</strong></div>
    @endif

    @if(Session('warning'))
    <div class="alert alert-warning">
    <button class="btn close" data-bs-dismiss="alert">x</button>
    <strong>{{Session('warning')}}</strong></div>
    @endif

    @if(Session('error'))
    <div class="alert alert-danger">
    <button class="btn close" data-bs-dismiss="alert">x</button>
    <strong>{{Session('error')}}</strong></div>
    @endif
</div>
</div>
