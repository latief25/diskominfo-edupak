<form method="POST" action="/profile">
  @csrf
  <fieldset id="edit" disabled>
    <div class="card-body">

      <div class="form-group">
        <label for="pangkat">Instansi</label>
        <select class="form-control" name="pangkat">
          @if (1)
          <option selected>Pilih Instansi</option>
          @endif
          @foreach ($instansi as $i)
          <option @if ($data->pangkat_id === $i->id) selected @endif value="{{ $i->id }}">
            {{ $i->kinsduk }} {{ $i->nwil }}
          </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control @error('nip')is-invalid @enderror" name="nip" value="{{ $data->nip }}" required>
        @error('nip')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" value="{{ $data->nama }}" required>
        @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="nomor_seri_karpeg">Nomor Seri KARPEG</label>
        <input type="text" class="form-control @error('nomor_seri_karpeg')is-invalid @enderror" name="nomor_seri_karpeg" value="{{ $data->nkarpeg }}" required>
        @error('nomor_seri_karpeg')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="row">
        <div class="col-md">
          <div class="form-group">
            <label for="pangkat">Pangkat</label>
            <select class="form-control" name="pangkat">
              @if ($data->pangkat_id == null)
              <option selected>Pilih Pangakat</option>
              @endif
              @foreach ($pangkat as $p)
              <option @if ($data->pangkat_id === $p->id) selected @endif value="{{ $p->id }}">
                {{ $p->nama_pangkat }}
              </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md">
          <div class="form-group" name="tmt_golongan_ruang">
            <label for="tmt_golongan_ruang">TMT Golongan Ruang</label>
            <input type="date" class="form-control @error('tmt_golongan_ruang')is-invalid @enderror" name="tmt_golongan_ruang" value="{{ $data->tmt_golongan_ruang }}" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control @error('tempat_lahir')is-invalid @enderror" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required>
        @error('tempat_lahir')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir')is-invalid @enderror" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required>
      </div>

      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
          @if ($data->jenis_kelamin == null)
          <option selected>Pilih Jenis Kelamin</option>
          @endif
          <option value="L" @if ($data->jenis_kelamin === 'L') selected @endif>Laki-Laki</option>
          <option value="P" @if ($data->jenis_kelamin === 'P') selected @endif>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pendidikan_tertinggi">Pendidikan Tertinggi</label>
        <select class="form-control" name="pendidikan_tertinggi">
          @if ($data->pendidikan_tertinggi == null)
          <option selected>Pilih Pendidikan Tertinggi</option>
          @endif
          <option value="SMA" @if ($data->pendidikan_tertinggi === 'SMA') selected @endif>SMA</option>
          <option value="S1" @if ($data->pendidikan_tertinggi === 'S1') selected @endif>S1</option>
          <option value="S2" @if ($data->pendidikan_tertinggi === 'S2') selected @endif>S2</option>
          <option value="S3" @if ($data->pendidikan_tertinggi === 'S3') selected @endif>S3</option>
        </select>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="form-group">
            <label for="jabatan_fungsional">Jabatan Fungsional</label>
            <select class="form-control" name="jabatan_fungsional">
              @if ($data->jabatan_fungsional_id == null)
              <option selected>Pilih Jabatan Fungsional</option>
              @endif
              @foreach ($jabatan_fungsional as $j)
              <option @if ($data->jabatan_fungsional_id === $j->id) selected @endif value="{{ $j->id }}">
                {{ $j->nama_jabatan_fungsional }}
              </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md">
          <div class="form-group">
            <label for="tmt_jabatan_fungsional">TMT Jabatan Fungsional</label>
            <input type="date" class="form-control @error('tmt_jabatan_fungsional')is-invalid @enderror" name="tmt_jabatan_fungsional" value="{{ $data->tmt_jabatan_fungsional }}" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="form-group">
            <label for="masa_kerja_golongan_lama">Masa Kerja Golongan Lama</label>
            <input type="month" class="form-control @error('masa_kerja_golongan_lama')is-invalid @enderror" name="masa_kerja_golongan_lama" value="{{ $data->masa_kerja_golongan_lama }}" required>
            @error('masa_kerja_golongan_lama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="col-md">
          <div class="form-group">
            <label for="masa_kerja_golongan_baru">Masa Kerja Golongan Baru</label>
            <input type="month" class="form-control @error('masa_kerja_golongan_baru')is-invalid @enderror" name="masa_kerja_golongan_baru" value="{{ $data->masa_kerja_golongan_baru }}" required>
            @error('masa_kerja_golongan_baru')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="unit_kerja">Unit Kerja</label>
          <select class="form-control" name="unit_kerja">
            @if ($data->unit_kerja_id == null)
            <option selected>Pilih Unit Kerja</option>
            @endif
            @foreach ($unit_kerja as $u)
            <option @if ($data->unit_kerja_id === $u->id) selected @endif value="{{ $u->id }}">
              {{ $u->nama_unit_kerja }}
            </option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="card-footer mt-n2 mb-2">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </fieldset>
</form>
