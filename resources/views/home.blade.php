@extends('layouts.layout')

@section('form')
<div class="bg-brand-gray-100">
    <div class="mx-auto">
        <div class="mt-10 bg-white mx-auto shadow sm:rounded-lg">
            <div class="p-6 border-t md:border-t-0 md:border-l">
                    <!-- <div class>
                        <a href="/form" class="btn btn-success">Input Form</a>
                    </div> -->

                    <form action="{{ url('/')}}" class="d-flex flex-row" id="search" method="GET">
                        <a href="/form" class="btn btn-success" id="btn_inputform">Input Form</a>
                        <input value="{{ Request::get('keyword')}}" name="keyword" type="text" class="form-control"  id="input_search" placeholder="">
                        <button type="submit" class="btn btn-primary" id="btn_search">Search</button>
                    </form>

                    <!-- <div class="flex items-center"> -->
                    <!-- <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('/form') }}" class="underline text-black">Input Form</a></div> -->

                <table
                    class="table table-striped table-bordered mx-auto" id="table_index" style="width:75%">
                    <thead class="thead-dark ">
                        <tr>
                            <th>Code</th>
                            <th>Year</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Topic</th>
                            <th>Sub Topic</th>
                            <th>Reference</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_input as $item)
                        <tr>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->year }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->topic }}</td>
                            <td>{{ $item->subtopic }}</td>
                            <td>{{ $item->reference }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="">
                {{ $data_input->links() }}
                </div>
                <div class="">
                    showing
                    {{ $data_input-> FirstItem() }}
                    to
                    {{ $data_input-> LastItem() }}
                    of
                    {{ $data_input-> total() }}
                    entries
                </div>
            </div>
        </div>
    </div>
</div>
@endsection