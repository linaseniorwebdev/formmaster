<form action="<?=base_url('form/jvo4xoyi')?>" method="post">
<!-- Text Input | Text input-->
<div class="form-group row">
    <label class="col-md-4 col-form-label" for="textinput">Text Input</label>
    <div class="col-md-4">
        <input aria-describedby="textinputHelpBlock" id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
        <small id="textinputHelpBlock" class="text-muted">help</small>
    </div>
</div>
<!-- Text Area | Textarea -->
<div class="form-group row">
    <label class="col-md-4 col-form-label" for="textarea">Text Area</label>
    <div class="col-md-8">
        <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
    </div>
</div>
<!-- Inline Radios | Multiple Radios (inline)-->
<div class="form-group row">
    <label class="col-md-4 col-form-label">Inline Radios</label>
    <div class="col-md-8">
        <label class="radio-inline" for="radios-0">
            <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
            1
        </label>
        <label class="radio-inline" for="radios-1">
            <input type="radio" name="radios" id="radios-1" value="2">
            2
        </label>
        <label class="radio-inline" for="radios-2">
            <input type="radio" name="radios" id="radios-2" value="3">
            3
        </label>
        <label class="radio-inline" for="radios-3">
            <input type="radio" name="radios" id="radios-3" value="4">
            4
        </label>
    </div>
</div>
<!-- Select Basic | Select Basic -->
<div class="form-group row">
    <label class="col-md-4 col-form-label" for="selectbasic">Select Basic</label>
    <div class="col-md-4">
        <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1">Option one</option>
            <option value="2">Option two</option>
        </select>
    </div>
</div>
<!-- Double Button | Button (Double) -->
<div class="form-group row">
    <label class="col-md-4 col-form-label" for="button1id">Double Button</label>
    <div class="col-md-8">
        <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
        <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
    </div>
</div>
</form>