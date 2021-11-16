@extends('cms.cms_master')

@section ('cmsCss')
<!-- fontIconPicker core CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/jquery.fonticonpicker.min.css')}}" />
 
<!-- required default theme -->
<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/themes/grey-theme/jquery.fonticonpicker.grey.min.css')}}" />
 
<!-- optional themes -->
<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/themes/dark-grey-theme/jquery.fonticonpicker.darkgrey.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/themes/bootstrap-theme/jquery.fonticonpicker.bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/themes/inverted-theme/jquery.fonticonpicker.inverted.min.css')}}" />

<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/fontello-7275ca86/css/fontello.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('admincss/iconpicker/icomoon/icomoon.css')}}" />
@endsection



@section ('cms_content')
<div class="row">
    <section class="heading-title heading-arrow-bottom">
        <div class="container-fluid">
            <div class="text-center">
                <h3><span>יצירת תפריט חדש</span></h3>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="box-static box-border-top padding-30">
                        <h5 class="color-9">הסבר קצר</h5>
                        <p>
                            <strong> <span style="font-size:1.2em;text-decoration: underline;">תפריט אב:</span></strong> אם אתן רוצות שהפריט החדש יהיה תת תפריט בחרו לו תפריט אב. 
                            אם לא, אנא בחרו באופציה - זהו תפריט אב.
                            <br> <br>
                            <strong> <span style="font-size:1.2em;text-decoration: underline;">שם תפריט:</span></strong> זה מה שיהיה רשום בתפריט האתר. אני ממליץ בעברית כמובן ושיהיה פשוט וברור
                            <br> <br>
                            <strong> <span style="font-size:1.2em;text-decoration: underline;">קישור :</span></strong> זה מה שיהיה רשום בשורת הקישור. ממליץ בחום שיהיה באנגלית במילה אחת קלה להבנה כי גוגל קורא… <br> <br>
                            לדוגמה הקישור של שירותים הוא -  services

                        </p>
                    </div>    
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-static box-border-top padding-30">
<form class="nomargin" method="post" action="{{url('cms/menu')}}" autocomplete="on">
                            <div class="clearfix">
                                {{csrf_field()}}
                                <!-- Parent_id -->
                                <div class="form-group">
                                    <label for="parent_id">תפריט אב</label>
                                    <select name="parent_id" class="form-control select2">
                                        <option vlaue="-1">    בחר אופציה    </option>
                                        @foreach($allmenus as $row)  
                                        <option value="{{$row['id']}}">{{$row['link']}}</option>
                                        @endforeach
                                        <option vlaue="0">זהו תפריט אב </option>
                                    </select>
                                </div>

                                <!-- Link -->
                                <div class="form-group">
                                    <label for="link">שם תפריט</label>
                                    <input value="{{Input::old('link')}}" type="text" name="link" class="form-control" placeholder="ממליץ אותיות בלבד ובעברית">

                                </div>

                                <!-- URL -->
                                <div class="form-group">
                                    <label for="url">קישור</label>
                                    <input value="{{Input::old('url')}}" type="text" name="url" class="form-control" placeholder="באנגלית ובמילה אחת">
                                </div>

                                <!--                            <div class="icon-picker form-group" data-pickerid="fa" data-iconsets='{"fa":"Pick FontAwesome"}'>
                                                                <label for="icon">אייקון</label>
                                                                <input type="text">
                                                            </div>-->

                                <div class="row">
                                    <div class="col-md-12">
                                        
                                            <div class="form-group col-md-3">
                                                <label for="icon">צבע רקע לאייקון</label>
                                                <select name="icon" class="form-control ">
                                                    <option vlaue="-1">בחר   </option>
                                                    @foreach($colors as $color)  
                                                    <option value="{{$color->bgNum}}" style="background-color:{{$color->hex}}">{{$color->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        
                                            <div class="form-group col-md-9">
                                                <label for="color"> אייקון</label>
                                                <select id="myselect" name="color" class="myselect">
<!--                                                <option value="">No icon</option>
                                                    @foreach($icons as $icon)  
                                                    <option value="{{$icon->faIcon}}"> </option>-->
                                                    @endforeach
                                                    </select>
                                            </div>
                                    </div>
                                </div>

                                
                                <br>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-danger pull-left" style="width:25%" href="{{url('cms/menu')}}">בטל</a>  
                                    <input type="submit" name="submit" class="btn btn-success pull-right" style="width:25%" value="צור תפריט חדש">                         
                                </div>
                            </div>




                        </form>

                    </div>

                </div>
            </div>

        </div>
        <br><br><br><br><br> <br><br><br><br><br>
    </section>
</div>





@endsection

@section('cmsScripts')
<script type="text/javascript">
    // Make sure to fire only when the DOM is ready
    jQuery(document).ready(function($) {

    
    var icm_icons = {
    'אינטרנט' : [57436, 57437, 57438, 57439, 57524, 57525, 57526, 57527, 57528, 57531, 57532, 57533, 57534, 57535, 57536, 57537, 57541, 57545, 57691, 57692],
    'עסקים' : [57347, 57348, 57375, 57376, 57377, 57379, 57403, 57406, 57432, 57433, 57434, 57435, 57450, 57453, 57456, 57458, 57460, 57461, 57463],
    'חנויות מקוונות' : [57392, 57397, 57398, 57399, 57402],
    'טפסים' : [57383, 57384, 57385, 57386, 57387, 57388, 57484, 57594, 57595, 57600, 57603, 57604, 57659, 57660, 57693],
    'פעולות משתמש ועורכי טקסטים' : [57442, 57443, 57444, 57445, 57446, 57447, 57472, 57473, 57474, 57475, 57476, 57477, 57539, 57662, 57668, 57669, 57670, 57671, 57674, 57675, 57688, 57689],
    'רשימות' : [57493],
    'הדגשה' : [57543, 57588, 57590, 57591, 57592, 57593, 57596]
};
$('.myselect').fontIconPicker({
    source: icm_icons,
    useAttribute: true,
    attributeName: 'data-icomoon',
    hasSearch: false,
    emptyIcon: true,
    allCategoryText: 'הצג הכל'
});
    });
    
    
    //    $('#myselect').fontIconPicker(); // Load with default options       icm_icons
        
    //    $('#icomoon').fontIconPicker({ theme: 'fip-darkgrey' });
   //     $('#no_hexadecimal').fontIconPicker({
    //        source: ['&#xe1b1;', '&#xe1b2;', '&#xe1b3;', '&#xe1b4;', '&#xe1b5;', '&#xe1b6;', '&#xe1b7;', '&#xe1b8;', '&#xe1b9;', '&#xe1ba;'],
//            searchSource: ['Libre Office', 'File PDF', 'File Open Office', 'File Word', 'File Excel', 'File ZIP', 'File PowerPoint', 'File XML', 'File CSS', 'HTML 5'],
     //       useAttribute: true,
             //      attributeName: 'data-icomoon',
    //        convertToHex: false,
  //          theme: 'fip-bootstrap'  }); 
    
</script>

@endsection