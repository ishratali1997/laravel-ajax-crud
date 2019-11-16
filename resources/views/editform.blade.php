<!-- Modal -->
<div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="editform">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="hidden"  id="id" name="id">
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Model --}}