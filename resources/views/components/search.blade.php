<form action="" method="get">
    <div class="input-group">
        <input type="text" class="form-control" name="keyword" value="{{ Request::get('keyword') }}"
            placeholder="Search">
        <div class="input-group-append">
            <button class="btn btn-sm btn-primary px-3" style="background:#00ADB5;border-color:#00ADB5;"><i
                    class="fa fa-search"></i></button>
        </div>
    </div>
</form>
