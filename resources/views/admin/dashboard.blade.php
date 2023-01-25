@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endpush

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    @include('partials.admin.dashboard.tile', ['icon' => 'book',  'value' => $totalArticles, 'key' => 'Total Articles'])
                    @include('partials.admin.dashboard.tile', ['icon' => 'bookmark', 'value' => $totalCategory, 'key' => 'Total Categories'])
                    @include('partials.admin.dashboard.tile', ['icon' => 'file', 'value' => $totalPage , 'key' => 'Total Pages'])
                    @include('partials.admin.dashboard.tile', ['icon' => 'users', 'value' => $totalAllUser, 'key' => 'Total Users'])
                </div>
            </section>
            </ul>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.0/raphael-min.js"></script>
@endsection
