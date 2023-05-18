<!DOCTYPE html>

<html lang="en">

<head>
  <title>Tour Booking Mail</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>


<table width="600" style="margin:auto;" cellpadding="10" cellspacing="0" border="0">
    <thead style="background:#fff;">
        <tr>
            <td colspan="2" style="border-bottom:1px solid #2eb775;background: #fff;"><a href="{{Config::get('websitedetail.SITE_URL')}}"><img src="{{Config::get('websitedetail.SITE_URL')}}/frontend/img/ilinkturkey.png" alt="{{Config::get('websitedetail.SITE_URL')}}" width="200"></a></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2">
                <h2 style="text-align:center; color:#005e84; font-weight:bold;">{{$content['heading']}}</h2>
                <p>
                {{$content['message']}}
                </p>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left">
                <p>Best Wishes,<br />From {{Config::get('websitedetail.SITE_TITLE')}}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:12px;">If you have any further questions please feel free to write back at <a href="mailto:{{Config::get('websitedetail.SITE_EMAIL')}}" style="color:#005e84;">{{Config::get('websitedetail.SITE_EMAIL')}}</a> or alternatively call us at <a href="tel:{{Config::get('websitedetail.SITE_PHONE')}}" style="color:#005e84;">{{Config::get('websitedetail.SITE_PHONE')}}</a>.</td>
        </tr>
    </tfoot>
</table>
</body>

</html>