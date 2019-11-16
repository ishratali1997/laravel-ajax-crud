<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    @include('editform')
    @include('deletedialog')
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Student Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" id="addform">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp"
                                placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" aria-describedby="emailHelp"
                                placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select name="course" id="course" class="form-control">
                                <option value="C++">C++</option>
                                <option value="Java">Java</option>
                                <option value="C#">C#</option>
                                <option value="Dart">Dart</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <select name="section" id="section" class="form-control">
                                <option></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Model --}}
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">

                    <div class="jumbotron bg-danger" id="error"></div>
                    <div class="aler alert-success" id="success">Added Successfully</div>
                    <h1 class="text-center">Add new Student</h1><br>
                    <!-- Button trigger modal -->
                    <button type="button" id="dlg" class="btn btn-primary">
                        Add
                    </button><br>
                    <table class="table table-dark">
                        <tr>
                            <thead>
                                <td>#</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Course</td>
                                <td>Subject</td>
                                <td>Action</td>
                            </thead>
                        </tr>
                        <tbody id="studentinfo">
                            @foreach ($students as $student)
                            <tr>
                                <td id="no">{{ $loop->iteration}}</td>
                                <td id="id" style="display:none;">{{ $student->id}}</td>
                                <td id="fname">{{ $student->fname }}</td>
                                <td id="lname">{{ $student->lname }}</td>
                                <td id="course">{{ $student->course }}</td>
                                <td id="section">{{ $student->section }}</td>
                                <td>
                                    <a href="#" class="btn btn-success editbtn">Edit</a>
                                    <a href="#" class="btn btn-danger deletebtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/insert.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/edit.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/delete.js') }}"></script>

</body>

</html>