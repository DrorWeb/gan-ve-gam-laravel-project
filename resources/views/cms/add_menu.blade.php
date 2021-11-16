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
                                
                                <!-- ICON & ITS COLOR-->
                                <div class="row">
                                    <div class="col-md-12"> 
                                          <!-- COLOR-->
                                            <div class="form-group col-md-3">
                                                <label for="color">צבע רקע לאייקון</label>
                                                <select name="color" class="form-control ">
                                                    <option vlaue="-1">בחר   </option>
                                                    @foreach($colors as $color)  
                                                    <option value="{{$color->bgNum}}" style="background-color:{{$color->hex}}">{{$color->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                          <!-- ICON -->
                                            <div class="form-group col-md-9">
                                                <label for="icon"> לבחירת אייקון 
                                                    <a href="http://theme.stepofweb.com/Smarty/v2.0.0/HTML_BS4/feature-icons-fontawesome.html" target="_NEW"> לחץ כאן</a>
                                                </label>
                                                 
                                                <input value="{{Input::old('icon')}}" type="text" name="icon" class="form-control" placeholder="הדבק כאן">
                                                
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
   jQuery(document).ready(function($) {
    
        $('#e3_element').fontIconPicker({
        source: fnt_icons,
        theme: 'fip-bootstrap'
        });
 
    });

    
</script>

@endsection