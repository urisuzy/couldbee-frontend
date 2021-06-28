<div>
    <label for="{{$name}}Input" class="form-label">{{$label}}</label>
    <input type="{{$type}}" value="{{$value??''}}" class="form-control" id="{{$name}}Input" aria-describedby="emailHelp" name="{{$name}}" <?= isset($disable) ? 'disabled' : '' ?>>
</div>