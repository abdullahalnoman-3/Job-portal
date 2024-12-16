@extends('layout.app',['title' => 'brows company'])

        @section('content')
        <div class="container">
            <h3>Browse Companies</h3>

            @if($brows_company->isEmpty())
                <p>No companies found in the job list.</p>
            @else
                <ul class="list-group">
                    @foreach($brows_company as $company)
                        <li class="list-group-item">
                            {{ $company->company_name }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

@endSection
