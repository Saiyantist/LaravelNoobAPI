<div>
    <h1>Welcome to School</h1>

    <h2>Select all from Students</h2>

    
    @if(isset($students))
        
    <table style="border-collapse: collapse; border: 2px solid black; ">
        <tr style="border: 1px solid black;">
            <th style="padding: 5px">ID</th>
            <th style="padding: 5px">Full Name</th>
            <th style="padding: 5px">Age</th>
            <th style="padding: 5px">Grade</th>
            <th style="padding: 5px 20px">City</th>
            <th style="padding: 5px">Teacher_ID</th>
            <th style="padding: 5px">Subject_ID</th>
        </tr>

    @foreach($students as $student)
        <tr style="border: 1px solid grey;">
            <td style="padding: 5px">{{$student->id}}</td>
            <td style="padding: 5px">{{$student->name}}</td>
            <td style="padding: 5px">{{$student->age}}</td>
            <td style="padding: 5px">{{$student->grade}}</td>
            <td style="padding: 5px 20px">{{$student->city}}</td>
            <td style="padding: 5px">{{$student->teacher_id}}</td>
            <td style="padding: 5px">{{$student->subject_id}}</td>
        </tr>
    @endforeach

    </table>

    @endif
    
</div>

