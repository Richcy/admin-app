{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Biodata pegawais" icon="la la-question" :link="backpack_url('biodata-pegawai')" />
<x-backpack::menu-item title="Pendidikan pegawais" icon="la la-question" :link="backpack_url('pendidikan-pegawai')" />
<x-backpack::menu-item title="Sertifikat pegawais" icon="la la-question" :link="backpack_url('sertifikat-pegawai')" />
<x-backpack::menu-item title="Jabatan pegawais" icon="la la-question" :link="backpack_url('jabatan-pegawai')" />