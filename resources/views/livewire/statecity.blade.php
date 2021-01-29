<div>
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-right">Provinsi</label>

        <div class="col-md-6">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>--- PILIH PRROVINSI ---</option>
                @foreach($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Kota</label>
            <select wire:model="selectedKota" class="form-control">
                    <option value="" selected>--- PILIH KOTA ---</option>
                    @foreach($kota as $data2)
                        <option value="{{ $data2->id }}">{{ $data2->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
            @endif

            @if (!is_null($selectedKota))
        <div class="form-group row">
            <label for="" class="col-md-4 col-form-label text-md-right">Kecamatan</label>
                <select  wire:model="selectedKecamatan " class="form-control" name="id_kecamatan">
                    <option value="" selected>--- Pilih KECAMATAN ---</option>
                    @foreach($kecamatan as $data3)
                        <option value="{{ $data3->id }}">{{ $data3->nama_kecamatan }}</option>
                    @endforeach
                </select>
        </div>
    @endif

    @if (!is_null($selectedKecamatan))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Kelurahan</label>
            <select wire:model="selectedKeluarahan" class="form-control">
                    <option value="" selected>--- PILIH KELURAHAN ---</option>
                    @foreach($kelurahan as $data4)
                        <option value="{{ $data4->id }}">{{ $data4->nama_kelurahan }}</option>
                    @endforeach
                </select>
            </div>
            @endif

            @if (!is_null($selectedKelurahan))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Rw</label>
            <select wire:model="selectedRw" class="form-control">
                    <option value="" selected>--- PILIH RW ---</option>
                    @foreach($kota as $data5)
                        <option value="{{ $data5->id }}">{{ $data5->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
            @endif
</div>