<x-app-layout>

<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Account Setting</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="acc-edit">
                        <form>
                            <div class="form-group">
                            <label for="uname" class="form-label">User Name:</label>
                            <input type="text" class="form-control" id="uname" value="Bni@01">
                            </div>
                            <div class="form-group">
                            <label for="email" class="form-label">Email Id:</label>
                            <input type="email" class="form-control" id="email" value="Bnijohn@gmail.com">
                            </div>
                            <div class="form-group">
                            <label for="altemail" class="form-label">Alternate Email:</label>
                            <input type="email" class="form-control" id="altemail" value="designtheme@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="d-block form-label">Language Known:</label>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="english" checked="">
                                    <label class="form-check-label" for="english">English</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="french" checked="">
                                    <label class="form-check-label" for="french">French</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="hindi">
                                    <label class="form-check-label" for="hindi">Hindi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="spanish" checked="">
                                    <label class="form-check-label" for="spanish">Spanish</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="arabic">
                                    <label class="form-check-label" for="arabic">Arabic</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="italian">
                                    <label class="form-check-label" for="italian">Italian</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn bg-soft-danger">Cancle</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Social Media</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="acc-edit">
                        <form>
                            <div class="form-group">
                                <label for="facebook" class="form-label">Facebook:</label>
                                <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                            </div>
                            <div class="form-group">
                            <label for="twitter" class="form-label">Twitter:</label>
                            <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                            </div>
                            <div class="form-group">
                            <label for="google" class="form-label">Google +:</label>
                            <input type="text" class="form-control" id="google" value="www.google.com">
                            </div>
                            <div class="form-group">
                            <label for="instagram" class="form-label">Instagram:</label>
                            <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                            </div>
                            <div class="form-group">
                            <label for="youtube" class="form-label">You Tube:</label>
                            <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn bg-soft-danger">Cancle</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>