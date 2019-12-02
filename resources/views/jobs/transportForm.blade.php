<fieldset>
    <div class="form-group">
        <label for="JobNumber"> Job Number
            <small class="text-muted">999226</small>
            <span class="text-danger">* required</span>
        </label>
        <input required="required"
                   name="JobNumber"
                   type="text"
                     id="JobNumber"
                  class="form-control col-md-6 {{ $errors->has('JobNumber')?'is-invalid':'' }}"
                  value="{{old('JobNumber',$cbJob->JobNumber)}}">
    </div>

    <div class="form-group">
        <label for="CustOrderNum"> Customer Order Number
        <small class="text-muted">123</small>
        <span class="text-danger">* required</span>
        </label>
        <input required="required"
                   name="CustOrderNum"
                     id="CustOrderNum"
                   type="text"
                  class="form-control col-md-6 {{ $errors->has('CustOrderNum')?'is-invalid':'' }}"
                  value="{{old('CustOrderNum',$cbJob->CustOrderNum)}}">
    </div>

    <div class="form-group">
        <label for="Reg"> Registration
            <span class="text-danger">* required</span>
        </label>
        <input  required="required" name="Reg" id="Reg" type="text"
            class="form-control col-md-6 {{ $errors->has('Reg')?'is-invalid':'' }}"
            value="{{old('Reg',$cbJob->Reg)}}">
    </div>

    <div class="form-group">
        <label for="DueDate"> Due Date (YYYY-MM-DD) </label>
        <input name="DueDate" id="DueDate" type="text"
            class="form-control col-md-6 {{ $errors->has('DueDate')?'is-invalid':'' }}"
            value="{{old('DueDate',$cbJob->DueDate)}}">
    </div>

    <div class="form-group">
        <label for="ColDate"> Collection Date </label>
        <input name="ColDate" id="ColDate" type="text"
            class="form-control col-md-6 {{ $errors->has('ColDate')?'is-invalid':'' }}"
            value="{{old('ColDate',$cbJob->ColDate)}}">
    </div>

    <div class="form-group">
        <label for="DelDate"> Delivery Date </label>
        <input name="DelDate" id="DelDate" type="text"
            class="form-control col-md-6 {{ $errors->has('DelDate')?'is-invalid':'' }}"
            value="{{old('DelDate',$cbJob->DelDate)}}">
    </div>

    <div class="form-group">
        <label for="Progress"> Progress
            <span class="text-danger">* required</span>
        </label>
        <input required="required" name="Progress" id="Progress" type="text"
            class="form-control col-md-6 {{ $errors->has('Progress')?'is-invalid':'' }}"
            value="{{old('Progress',$cbJob->Progress)}}">
    </div>

    <div class="form-group">
        <label for="POCName"> POC Name </label>
        <input name="POCName" id="POCName" type="text"
            class="form-control col-md-6 {{ $errors->has('POCName')?'is-invalid':'' }}"
            value="{{old('POCName',$cbJob->POCName)}}">
    </div>

    <div class="form-group">
        <label for="POCDate"> POCDate </label>
        <input name="POCDate" id="POCDate" type="text"
            class="form-control col-md-6 {{ $errors->has('POCDate')?'is-invalid':'' }}"
            value="{{old('POCDate',$cbJob->POCDate)}}">
    </div>

    <div class="form-group">
        <label for="POCTime"> POC Time </label>
        <input name="POCTime" id="POCTime" type="text"
            class="form-control col-md-6 {{ $errors->has('POCTime')?'is-invalid':'' }}"
            value="{{old('POCTime',$cbJob->POCTime)}}">
    </div>

    <div class="form-group">
        <label for="POCMiles"> POC Miles </label>
        <input name="POCMiles" id="POCMiles" type="text"
            class="form-control col-md-6 {{ $errors->has('POCMiles')?'is-invalid':'' }}"
            value="{{old('POCMiles',$cbJob->POCMiles)}}">
    </div>

    <div class="form-group">
        <label for="PODName"> POD Name </label>
        <input name="PODName" id="PODName" type="text"
            class="form-control col-md-6 {{ $errors->has('PODName')?'is-invalid':'' }}"
            value="{{old('PODName',$cbJob->PODName)}}">
    </div>

    <div class="form-group">
        <label for="PODDate"> POD Date </label>
        <input name="PODDate" id="PODDate" type="text"
            class="form-control col-md-6 {{ $errors->has('PODDate')?'is-invalid':'' }}"
            value="{{old('PODDate',$cbJob->PODDate)}}">
    </div>

    <div class="form-group">
        <label for="PODTime"> POD Time </label>
        <input name="PODTime" id="PODTime" type="text"
            class="form-control col-md-6 {{ $errors->has('PODTime')?'is-invalid':'' }}"
            value="{{old('PODTime',$cbJob->PODTime)}}">
    </div>

    <div class="form-group">
        <label for="PODMiles"> POD Miles </label>
        <input name="PODMiles" id="PODMiles" type="text"
            class="form-control col-md-6 {{ $errors->has('PODMiles')?'is-invalid':'' }}"
            value="{{old('PODMiles',$cbJob->PODMiles)}}">
    </div>

    <div class="form-group">
        <label for="JobCancelled"> Job Cancelled </label>
        <input name="JobCancelled" id="JobCancelled" type="text"
            class="form-control col-md-6 {{ $errors->has('JobCancelled')?'is-invalid':'' }}"
            value="{{old('JobCancelled',$cbJob->JobCancelled)}}">
    </div>

    <div class="form-group">
        <label for="JobAborted"> Job Aborted </label>
        <input name="JobAborted" id="JobAborted" type="text"
            class="form-control col-md-6 {{ $errors->has('JobAborted')?'is-invalid':'' }}"
            value="{{old('JobAborted',$cbJob->JobAborted)}}">
    </div>

    <div class="form-group">
        <label for="notes"> Notes </label>
        <input name="notes" id="notes" type="text"
            class="form-control col-md-6 {{ $errors->has('notes')?'is-invalid':'' }}"
            value="{{old('notes',$cbJob->notes)}}">
    </div>


    <hr>





    <div class="form-group">
        <button type="submit" name="submit" class=" btn btn-primary btn-info">
            {{ $submitButtonText ?? 'Update Transport Job ' }}
        </button>
    </div>
</fieldset>
