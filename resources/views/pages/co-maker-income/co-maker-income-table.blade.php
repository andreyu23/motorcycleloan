
<div class="py-12 pt-4">

    <table class="datatable-init table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Employer's Name</th>
                <th>Address</th>
                <th>Cellpohne No.</th>
                <th>Telephone No.</th>
                <th>Position</th>
                <th>Status of Employment</th>
                <th>Nature of Self Business Practice</th>
                <th>Income</th>
                <th>Length of Business Practice</th>
                <th>Years</th>
                <th>Months</th>
                <th>Other Source of Income</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($comakerincome as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['co_income_employer_name']}}</td>
                <td>{{$value['co_income_address']}}</td>
                <td>{{$value['co_income_cellphone_number']}}</td>
                <td>{{$value['co_income_telephone_number']}}</td>
                <td>{{$value['co_income_position']}}</td>
                <td>{{$value['co_income_emp_status']}}</td>
                <td>{{$value['co_income_nature']}}</td>
                <td>{{$value['co_income_income']}}</td>
                <td>{{$value['co_income_length']}}</td>
                <td>{{$value['co_income_year']}}</td>
                <td>{{$value['co_income_month']}}</td>
                <td>{{$value['co_income_other_income']}}</td>

                <td>
                    <button class="btn btn-xs btn-light}">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                        <button type="submit" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
