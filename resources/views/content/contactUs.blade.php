@extends('master')

@section ('content')
<div style="background-image: url('{{asset('images/backgrounds/footer-bg-5.png')}}'); background-repeat: repeat; min-height: 800px">
    <div class="hidden-xs"> <br><br> <br><br> </div>
    <br><br>
    <div class="container" id="contactus">
        <div class="row" style="padding-top: 80px;">
            <!-- FORM -->
            <div class="col-md-9 col-sm-9">
                <h3 class="color-1">כיתבו לנו  </h3>
                <form action="{{url('contact_store')}}" method="post" autocomplete="on">
                    {{csrf_field()}}
                        <fieldset>
                        <input type="hidden" name="action" value="contact_send" />
                        <div class="row">
                            <div class="form-group color-1">
                                <div class="col-md-4">
                                    <label for="contact_name">שם מלא</label>
                                    <input required type="text" value="" class="form-control" name="contact_name" id="contact:name">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact_email">כתובת אימייל</label>
                                    <input required type="email" value="" class="form-control" name="contact_email" id="contact:email">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact_phone">טלפון</label>
                                    <input type="text" value="" class="form-control" name="contact_phone" id="contact:phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group color-1">
                                
                                <div class="col-md-12">
                                    <label for="contact_customSubject">נושא</label>
                                    <select class="form-control pointer" name="contact_customSubject">
                                        <option value="">--בחר--</option>
                                        <option value="General">כללי</option>
                                        <option value="Review">השאר חוות דעת</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group color-1">
                                <div class="col-md-12">
                                    <label for="contact_message">הודעה</label>
                                    <textarea required maxlength="10000" rows="8" class="form-control" name="contact_message" id="contact:message"></textarea>
                                </div>
                            </div>
                        </div>
                        </fieldset>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success">שלח הודעה</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /FORM -->
            <!-- INFO -->
            <div class="col-md-3 col-sm-3">
                <h3 class="color-1">בואו לביקור</h3>
                <p class="color-0">
                    ממש קרוב לפארק ארבע עונות בהוד השרון נמצא הגן שלנו. 
                    נשמח לארח אתכם בכל שעה למעט שעות מנוחת הילדים. אנא תאמו הגעה מראש.
                </p>
                <hr />
                <h4 class="font300 color-1">שעות פעילות</h4>
                <p>
                    <span class="block color-0"><strong class="color-1">ראשון - חמישי:</strong> 17:00 - 7:00</span>
                    <span class="block color-0"><strong class="color-1">שישי:</strong> 12:00 - 7:00</span>
                    <span class="block color-0"><strong class="color-1">שבת:</strong> סגור</span>
                </p>
            </div>
        </div>

    </div>
</div>
@include('inc.footer')
@endsection

@section ('scripts')
<script type="text/javascript" src="{{asset('js/contact.js')}}"></script>	
@endsection

