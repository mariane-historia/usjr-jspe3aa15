<p>{{ $college->collfullname }}</p>
<p>Departments:</p>
@foreach ($college->departments as $department)
    <p>{{ $department->deptfullname }}</p>
@endforeach
<p>Programs:</p>
@foreach ($college->programs as $program)
    <p>{{ $program->progfullname }}</p>
@endforeach
