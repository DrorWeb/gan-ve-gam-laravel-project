@extends('cms.cms_master')
@section('cmsCss')
<link href="{{ asset('admincss/layout.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section ('cms_content')
<section>
    <div class="row text-center hidden-lg hidden-md margin-top-60">
        <h1 style="margin-top:-50px;" class="color-4 margin-bottom-60">
            ברוכות הבאות לניהול
            <br>
             התוכן של אתר גן וגם
        </h1>
    </div>
    <div class="row text-center hidden-xs">
        <h1 style="margin-top:-50px;" class="color-4 margin-bottom-60">
            ברוכות הבאות למערכת ניהול התוכן של אתר גן וגם
        </h1>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/menu')}}">
                <div class="box bg-color-1">
                    <div class="box-title" >
                        <h1>תפריטים</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/keywords')}}">
                <div class="box bg-color-11">
                    <div class="box-title" >
                        <h1>מילות מפתח לגוגל</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/homeSlider')}}">
                <div class="box bg-color-2">
                    <div class="box-title" >
                        <h1>סליידר</h1>
                        <h5>עריכת סליידר דף הבית</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/newsletter')}}">
                <div class="box bg-color-3">
                    <div class="box-title" >
                        <h1>ניוזלטר</h1>
                        <h5>ניהול רשימת הנמענים</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/headlines')}}">
                <div class="box bg-color-4">
                    <div class="box-title" >
                        <h1>כותרות</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/ourService')}}">
                <div class="box bg-color-5">
                    <div class="box-title" >
                        <h1>השירות שלנו</h1>
                        <h5>השירות שלנו בדף הבית</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/employees')}}">
                <div class="box bg-color-6">
                    <div class="box-title" >
                        <h1>צוות</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/facts')}}">
                <div class="box bg-color-7">
                    <div class="box-title" >
                        <h1>עובדות</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/testamonials')}}">
                <div class="box bg-color-8">
                    <div class="box-title" >
                        <h1>חוות דעת</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>                       
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/events')}}">
                <div class="box bg-color-9">
                    <div class="box-title" >
                        <h1>ארועים</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/schedule')}}">
                <div class="box bg-color-10">
                    <div class="box-title" >
                        <h1>לו״ז</h1>
                        <h5>עריכת לוח הזמנים</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/prices')}}">
                <div class="box bg-color-11">
                    <div class="box-title" >
                        <h1>מחירון</h1>
                        <h5>עריכת כרטיסי מחירים</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/about')}}">
                <div class="box bg-color-12">
                    <div class="box-title" >
                        <h1>דף אודות</h1>
                        <h5>עריכת תוכן דף אודות</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/offers')}}">
                <div class="box bg-color-13">
                    <div class="box-title" >
                        <h1>פעוטון גנון וצהרון</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/albums')}}">
                <div class="box bg-color-14">
                    <div class="box-title" >
                        <h1>תמונות</h1>
                        <h5>העלאה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/posts')}}">
                <div class="box bg-color-15">
                    <div class="box-title" >
                        <h1>פוסטים</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/songs')}}">
                <div class="box bg-color-1">
                    <div class="box-title" >
                        <h1>שירים</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/stories')}}">
                <div class="box bg-color-2">
                    <div class="box-title" >
                        <h1>סיפורים</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/messages')}}">
                <div class="box bg-color-3">
                    <div class="box-title" >
                        <h1>הודעות</h1>
                        <h5>ניהול הודעות מהאתר</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{url('cms/users')}}">
                <div class="box bg-color-4">
                    <div class="box-title" >
                        <h1>משתמשים</h1>
                        <h5>יצירה/עריכה/מחיקה</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- JAVASCRIPT FILES -->
<script type="text/javascript" src="{{ asset('adminplugins/jquery/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript"> var plugin_path = '{{asset('adminplugins')}}/';</script>
<script type="text/javascript" src="{{ asset('adminjs/app.js')}}"></script>

<!-- PAGE LEVEL SCRIPT -->

@endsection


