<div class="modal fade" id="add-modal">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header bg-info">
        <h4 class="modal-title"> Add Profile </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form role="form">
        <div class="modal-body">
            <div class="card-body">
                <form>
                <fieldset class="form-group">
                    <legend> Personal Details</legend>
                    <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="middleName">Middle Name</label>
                            <input type="text" class="form-control" placeholder="Enter Middle Name">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName"> Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name">
                        </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        <label for="gender"> Gender </label>
                        <br>
                        <input class="" type="radio" name="gender" value="Male"> Male &nbsp; &nbsp;
                        <input class="" type="radio" name="gender" value="Female"> Female &nbsp; &nbsp;
                        <input class="" type="radio" name="gender" value="Other"> Other
                    </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dateOfBirth"> Date Of Birth </label>
                                    <input type="date" class="form-control" placeholder="Enter DOB">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="occupation"> Occupation </label>
                                    <input type="text" class="form-control" placeholder="Enter Occupation">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qualification"> Qualification  </label>
                                    <select name="qualification" class="form-control">
                                        <option class="form-control" selected> --Choose Qualification-- </option>
                                        <option class="form-control" value="phd"> PHD </option>
                                        <option class="form-control" value="master"> Master Level </option>
                                        <option class="form-control" value="Bachelor"> Bachelor Level </option>
                                        <option class="form-control" value="highersecondary"> Higher Secondary Level </option>
                                        <option class="form-control"  value="lowersecondary"> Lower Secondary Level </option>
                                        <option class="form-control" value="secondarylevel"> Secondary Level </option></option>
                                        <option class="form-control" value="primarylevel"> Primary Level</option>
                                        <option class="form-control" value="illiterate"> Illiterate </option>
                                        <option class="form-control" value="illerate"> Illerate </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone"> Phone </label>
                                    <input type="number" class="form-control" placeholder="Enter Phone Number">
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <br>
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nationality"> Nationality </label>
                                    <br>
                                    <input type="email" class="form-control" placeholder="Enter Nationality">
                                </div>
                            </div>
                        </div>




                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="religion "> Religion  </label>
                                    <select name="religion" class="form-control">
                                        <option class="form-control" selected> --Choose Religion-- </option>
                                        <option class="form-control" value="buddist"> Buddist </option>
                                        <option class="form-control" value="hindusm"> Hindusm </option>
                                        <option class="form-control" value="christan"> Christan </option>
                                        <option class="form-control" value="jain"> Jain </option>
                                        <option class="form-control"  value="jews"> Jews </option>
                                        <option class="form-control" value="muslim"> Muslim </option></option>
                                        <option class="form-control" value="sikh"> Sikh </option>
                                        <option class="form-control" value="others"> Others </option>
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="martialStatus"> Maritial Stutas  </label>
                                    <select name="religion" class="form-control">
                                        <option class="form-control" selected> --Choose Status-- </option>
                                        <option class="form-control" value="married"> Married </option>
                                        <option class="form-control" value="unmarried"> Unmarried </option>
                                        <option class="form-control" value="divorsed"> Divorsed </option>
                                        <option class="form-control" value="single"> Single </option>
                                        <option class="form-control"  value="widow"> Widow </option>
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="photo"> Photo  </label>
                            <input type='file' onchange="readURL(this);" />
                            <img id="blah" src="{{ asset('backend/img/user1.png') }}" alt="your image" />
                        </div>
                    </div>
                </div>

            </fieldset>



{{--  Permanent Address   --}}


            <fieldset>
                <legend> Permanent Address </legend>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="country"> Country </label>
                            <input type="text" class="form-control" placeholder="Enter Country">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="district">Province</label>
                            <input type="text" class="form-control" placeholder="Enter Province">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName"> District </label>
                            <input type="text" class="form-control" placeholder="Enter District">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="localaddress "> VDC/Municipality  </label>
                            <input class="form-control" type="text" name="localaddress" placeholder="Enter VDC/Municipality">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="toleName"> Tole Name </label>
                            <input type="text" class="form-control" placeholder="Enter Tole Name">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="phone"> Phone </label>
                            <input type="number" class="form-control" placeholder="Enter Phone">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="mobile"> Mobile </label>
                            <input type="number" class="form-control" placeholder="Enter Mobile No.">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">

                        </div>
                    </div>
                </div>

            </fieldset>



            {{--  Temporary Address   --}}

            <br>
            <fieldset>
                <legend> Temporary Address </legend>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="country"> Country </label>
                            <input type="text" class="form-control" placeholder="Enter Country">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="district">Province</label>
                            <input type="text" class="form-control" placeholder="Enter Province">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName"> District </label>
                            <input type="text" class="form-control" placeholder="Enter District">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="localaddress "> VDC/Municipality  </label>
                            <input class="form-control" type="text" name="localaddress" placeholder="Enter VDC/Municipality">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="toleName"> Tole Name </label>
                            <input type="text" class="form-control" placeholder="Enter Tole Name">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="phone"> Phone </label>
                            <input type="number" class="form-control" placeholder="Enter Phone">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="mobile"> Mobile </label>
                            <input type="number" class="form-control" placeholder="Enter Mobile No.">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">

                        </div>
                    </div>
                </div>

            </fieldset>




            </form>
        </div>




        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info"> Add </button>
        </div>
        </form>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
