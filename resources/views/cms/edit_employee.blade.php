@extends('cms.cms_master')

@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3>עריכת פרופיל<span> עובדת</span> </h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-top:-40px;">
                <div class="col-md-6">
                    <div class="box-static box-border-top padding-30">
                        <form class="nomargin" method="post" action="{{url('cms/employees/' . $employee['id'])}}" enctype="multipart/form-data" files="true" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <!-- color -->
                                <div class="form-group">
                                    <label for="color">צבע הכרטיס   - <span style="font-size: 1.5em;">{{$employee['color']}}   &nbsp;&nbsp;&nbsp;    </span> ראה מקרא  -></label>
                                    <table class="pull-right size-20" style="margin-top:-30px;">
                                        <tr><td style="background-color: green; color:#fff; padding: 5px;">Success = ירוק</td></tr>
                                        <tr><td style="background-color: orange; color:#fff; padding: 5px;">Warning = כתום</td></tr>
                                        <tr><td style="background-color: red; color:#fff; padding: 5px;">danger = אדום</td></tr>
                                        <tr><td style="background-color: aqua; color:#333; padding: 5px;">info = תכלת</td></tr>
                                       
                                    </table>
                                    
                                    <select name="color" class="col-md-6">
                                        <option name="color" value="NULL">ללא צבע</option>
                                        <option name="color" value="danger">אדום</option>
                                        <option name="color" value="warning">כתום</option>
                                        <option name="color" value="info">תכלת</option>
                                        <option name="color" value="success">ירוק</option>
                                    </select>
                                </div><br><br><br><br>
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">שם</label>
                                    <input value="{{$employee['name']}}" type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <!-- job  -->
                                <div class="form-group">
                                    <label for="job">תפקיד- לא ניתן לשינוי</label>
                                    <input disabled value="{{$employee['job']}}" type="text" name="job" class="form-control" placeholder="">
                                </div>
                                <!-- details -->
                                <div class="form-group">
                                    <label for="details">פרטים</label>                               
                                    <input value="{{$employee['details']}}" type="text" name="details" class="form-control" placeholder="">
                                </div>
                                <!-- fullDetails -->
                                <div class="form-group">
                                    <label for="fullDetails">הרחבה - לא חובה</label>
                                    <textarea name="fullDetails" placeholder="" class="form-control" rows="5">{{$employee['fullDetails']}}</textarea>
                                </div>
                                <!-- Image -->
                                <div class="form-group">
                                    <label for="image">תמונה</label>
                                    <img style="width:90px;" border="0" src="{{asset('images/employees/' . $employee['image'])}}"><br><br>
                                    <input type="file" name="image">
                                </div>
                                <!-- Alt -->
                                <div class="form-group">
                                    <label for="alt">תיאור תמונה</label>                               
                                    <input value="{{$employee['alt']}}" type="text" name="alt" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row margin-top-50">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:30%;"href="{{url('cms/employees')}}">בטל</a>  
                                    <input type="submit" name="submit" style="width:30%;" class="btn btn-success pull-right" value="עדכן פרופיל עובדת">                         
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-static box-border-top">
                        <p class="text-center" style="font-size: 2em; margin-bottom: -10px;">
                            <strong>הוראות לעריכת צוות</strong>
                        </p> <br>
                        <p><strong>צבע כרטיס - </strong>בעריכת הכרטיסיות שלכן תבחרו - ללא צבע <br>
בעריכת הכרטיסיות של העובדות יש ארבעה צבעים - חובה לבחור צבע !!! <br>

</p>
                        <p><strong>שם  - </strong>אין צורך לפרט....נכון?</p>
                        <p><strong>תפקיד  - </strong>לא לשנות בשום פנים ואופן!!!</p>
                        <p><strong>פרטים  - </strong>שורה עד 35 תווים סוג של תקציר בצד הקדמי של הקלף קיים רק אצל הסייעות</p>
                        <p><strong>הרחבה  - </strong>טקסט בצידו האחורי של הקלף. כיתבו בהרחבה זו ההזדמנות שלכן לספר על עצמכן ועל העובדות שלכן   —   לא חובה</p>
                        <p><strong>תמונה  - </strong>תמונת העובדת - חובה!!!</p>
                        <p><strong>תיאור תמונה  - </strong>טקסט חלופי לתמונה - חשוב מאד לגוגל צריך להיות פשוט לדוגמה תמונה של אופירה סייעת בגן </p>
                        
                        
                    </div>    
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')


@endsection
