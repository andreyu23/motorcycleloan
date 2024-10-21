<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Family Background') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can enter your family background and submit here.') }}</x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">

                <div class="card">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-aside-wrap">
                        <div class="card-content">
                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link" href="/applicant">
                                        <em class="icon ni ni-user-circle"></em>
                                        <span>Applicant Information</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/application/spouse">
                                        <em class="icon ni ni-user-c"></em>
                                        <span>Spouse Information</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="icon ni ni-money"></em>
                                        <span>Residence Type & References</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <em class="icon ni ni-money"></em>
                                        <span>Source of Income / Revenue</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/family">
                                        <em class="icon ni ni-users"></em>
                                        <span>Family Background </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" href="/brosis">
                                        <em class="icon ni ni-user"></em>
                                        <span>Brother/Sisters</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/comaker">
                                        <em class="icon ni ni-money"></em>
                                        <span>Co-Maker Background</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" href="/income">
                                        <em class="icon ni ni-wallet"></em>
                                        <span>Co-maker Source of Income</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" href="/informant">
                                        <em class="icon ni ni-user"></em>
                                        <span>Informants</span>
                                    </a>
                                </li>

                            </ul>
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="nk-block">
                                        <h6 class="title overline-title text-dark text-base">
                                           Family Background
                                        </h6>
                                        <p>You can enter the family background here.</p>
                                    </div>
                                    <div class="nk-divider divider md"></div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{route('family.save')}}" method="POST" autocomplete="off">
                                        @csrf
                                        @include('pages.family-bg.family-bg-form')
                                    </form>
                                    <br><br>
                                    @include('pages.family-bg.family-bg-table')
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function dev() {
            Swal.fire({
                icon: 'warning',
                title: 'Under Development',
                text: 'Opps! Please try again later. thank you.',
                confirmButtonText: 'OK'
            });
        }
    </script>
</x-app-layout>
