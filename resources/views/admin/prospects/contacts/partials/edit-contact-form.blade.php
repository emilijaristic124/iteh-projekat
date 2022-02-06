<form action="{{ route('admin.prospects.contacts.update', $prospect_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group row">
        <label for="" class="col-md-3">Telefon</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Mobilni telefon</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="phone_mobile" value="{{ $contact->phone_mobile }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Faks</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="fax" value="{{ $contact->fax }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Adresa</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="address" value="{{ $contact->address }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Adresa 2</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="address_2" value="{{ $contact->address_2 }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Adresa 3</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="unit" value="{{ $contact->unit }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Grad</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="city" value="{{ $contact->city }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Region</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="province" value="{{ $contact->province }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Poštanski kod</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="postal_code" value="{{ $contact->postal_code }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Država</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="country" value="{{ $contact->country }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-md-3">Beleške</label>
        <div class="col-md-9">
            <textarea name="notes" cols="30" rows="10" class="form-control">{{ $contact->notes }}</textarea>
        </div>
    </div>

    <button class="btn btn-primary float-right">Izmeni kontakt podatke</button>
</form>


