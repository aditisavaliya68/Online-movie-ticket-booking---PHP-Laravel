@extends ('frontend.Layouts.main')

@section('main-container')
<!-----cntact---->	
<div class="contact s6" id="contact">
    <div class="wrap">
        <h3>CONTACT US</h3><br><br>
    
        <div class="contact_form">
                          <form method="post" action="contact-post.html">
                                <span><input type="text" value="NAME" required="required" minlength="2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME';}"><label><img src="images/con1.png" alt="" /></label></span>									    
                                <span class="left"><input type="text" value="EMAIL" required="required" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}"><label><img src="images/con2.png" alt="" /></label></span>
                            <div class="clear"></div>
                                <span><textarea placeholder="MESSAGE"></textarea><label1><img src="images/con3.png" alt="" /></label1></span>
                                   <input type="submit" class="" value="Submit">
                        </form>
         </div>
    </div>
</div>
 @endsection