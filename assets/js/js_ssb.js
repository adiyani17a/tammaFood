function tgl(tgl){
    $('.'+tgl).datepicker({
    autoclose: true,
            format: 'dd-M-yyyy',
            orientation:"top",
              beforeShow: function(){    
           $(".ui-datepicker").css('font-size', 12) 
    }     
    }).datepicker("setDate", "0");
};
function setRupiah(evt, nilai)
    {
        $minus=0;
        var code =  (evt.charCode) ? evt.charCode : ((evt.which) ? evt.which : evt.keyCode);
        var uangDe;
        if (code != 37 && code != 39 && code != 16 && code != 36 && code != 8)
            var uang = $('.' + nilai).val().replace(/[^0-9,-]*/g, '');
        $('.' + nilai).val(uang);
        var hitungKoma = 0;
        var pisah = new Array();
        var chekArray;
        for (o = 0; o < uang.length; o++) {                        
            if ((uang.charAt(0)) == '-' && uang.length>1) {                
                $minus=1;
                uang=uang.replace(/[^0-9,]*/g, '');
                
                
            } 
             
            else if ((uang.charAt(0)) == '-' && uang.length==1) {                                
                uang.replace(/[^0-9,]*/g, '');                
                uang='';
            } 
            if ((uang.charAt(o)) == ',') {
                hitungKoma++;
                if (hitungKoma == 1) {                        
                    uangDe=parseFloat(uang.replace(',', '.')).toFixed(2);
                    uang=uangDe.replace('.', ',');                       
                    chekArray = uang.split(',');                    
                    
                }else if(hitungKoma > 1){
                    toastr.warning('Harap perikasa kembali inputan anda');
                    var $notifyContainer = $('#toast-container').closest('.toast-top-center');
if ($notifyContainer) {
   // align center
   var windowHeight = $(window).height() - 90;
   $notifyContainer.css("margin-top", windowHeight / 2);
}
                    return false;
                }
            }

        }
        if ($.isArray(chekArray)) {            
            
            var rev = parseInt(chekArray[0], 10).toString().split('').reverse().join('');            
            var rev2 = '';
            for (var l = 0; l < rev.length; l++) {
                rev2 += rev[l];
                if ((l + 1) % 3 === 0 && l !== (rev.length - 1)) {
                    rev2 += '.';
                }
            }
            if (chekArray[1] == '' && $minus==0) {
                $('.' + nilai).val('Rp. ' + rev2.split('').reverse().join('') + ',' + '00');
            }
            if (chekArray[1] == '' && $minus>0) {
                $('.' + nilai).val('Rp. -' + rev2.split('').reverse().join('') + ',' + '00');
            }
            if (chekArray[1] != '' && $minus==0) {
                $('.' + nilai).val('Rp. ' + rev2.split('').reverse().join('') + ',' + chekArray[1]);
            }
            if (chekArray[1] != '' && $minus>0) {
                $('.' + nilai).val('Rp. -' + rev2.split('').reverse().join('') + ',' + chekArray[1]);
            }
//            else{
//                $('.' + nilai).val('Rp. ' + rev2.split('').reverse().join('') + ',' +chekArray[1]);
//            }
        } else {            
            var rev = parseInt(uang, 10).toString().split('').reverse().join('');
            var rev2 = '';
            for (var u = 0; u < rev.length; u++) {
                rev2 += rev[u];
                if ((u + 1) % 3 === 0 && u !== (rev.length - 1)) {
                    rev2 += '.';
                }
            }
            if($minus==0){
            $('.' + nilai).val('Rp. ' + rev2.split('').reverse().join('') + ',' + '00');
            }
            if($minus>0){
            $('.' + nilai).val('Rp. -' + rev2.split('').reverse().join('') + ',' + '00');
            }
            if (uang == '' || uang == '0') {
                $('.' + nilai).val('');
            }
        }
    }

    
    function setAwal(evt, nilai)
    {		
        var code =  (evt.charCode) ? evt.charCode : ((evt.which) ? evt.which : evt.keyCode);
        if (code != 37 || code != 39 || code != 16 || code != 36 || code != 8 )
            var uang = $('.' + nilai).val().replace(/[^0-9,-]*/g, '');
        
        var array = uang.split(',');
        
        if(array[1]=='00'){
            $('.' + nilai).val(array[0]);
        }else{
            $('.' + nilai).val(uang);
        }
        
            
    }    
    function angkaDesimal(angka){  
        
        var r     =angka;
        var regex =r.replace(/[^0-9,-]*/g, '');				
        return parseFloat(regex.replace(',', '.')).toFixed(2);
    }
    function decimalTwo(angka){    
         if($('.'+angka).val()!='' && $('.'+angka).val()!=0 ){
        var dt     =$('.'+angka).val();        
        var regex =dt.replace(/[^0-9,-]*/g, '');		
        var hasil=parseFloat(regex.replace(',', '.')).toFixed(2)
        hasil=hasil.replace('.', ',');
        $('.'+angka).val( hasil);
        }
    }
    

    function rege(evt, data){		
        var hitungKoma=0;
        var uang=$('.' + data).val();
        var code =  (evt.charCode) ? evt.charCode : ((evt.which) ? evt.which : evt.keyCode);
        
            for (m = 0; m < uang.length; m++) {
//            if ((uang.charAt(0)) == '-') {                
//                          
//            }    
            if ((uang.charAt(m)) == ',') {
                hitungKoma++;
            }            
            if (hitungKoma ==1 || hitungKoma ==0) {    
					 if(code == 37 || code == 39 || code == 16 || code == 36 && code == 8 
						&& code >= 48 || code <= 57){        
        
						}else{
        
					uang = $('.' + data).val().replace(/[^0-9,-]*/g, '');
                    $('.' + data).val(uang);
					
       
						}
					
					
                }else if (hitungKoma >1) {                                        
                    toastr.warning('Harap perikasa kembali inputan anda');
                    var $notifyContainer = $('#toast-container').closest('.toast-top-center');
if ($notifyContainer) {
   // align center
   var windowHeight = $(window).height() - 90;
   $notifyContainer.css("margin-top", windowHeight / 2);
}
                    return false;
                     
                }
        }
    }
    
    
    function ubahNilai(evt, nilai){	        
        var hitungKoma=0;
        var uang=$('.' + nilai).val();
        var code =  (evt.charCode) ? evt.charCode : ((evt.which) ? evt.which : evt.keyCode);
            for (var e = 0; e < uang.length; e++) {
            if ((uang.charAt(e)) == ',') {
                hitungKoma++;
            }            
                if (hitungKoma ==1 || hitungKoma ==0) {                    
        	 if(code == 37 || code == 39 || code == 16 || code == 36 && code == 8 
						&& code >= 48 || code <= 57){        
        
						}else{        
	            uang = $('.' + nilai).val().replace(/[^0-9,-]*/g, '');
                    $('.' + nilai).val(uang);
		}
					
					
                }else if (hitungKoma >1) {                                        
                    toastr.warning('Harap perikasa kembali inputan anda');
                    var $notifyContainer = $('#toast-container').closest('.toast-top-center');
if ($notifyContainer) {
   // align center
   var windowHeight = $(window).height() - 90;
   $notifyContainer.css("margin-top", windowHeight / 2);
}
                    return false;
                }

        }
    }
    
    
    //SetFormRupiah
    function SetFormRupiah(uang)
    {        
        var pisah = new Array();
        var chekArray;        
        chekArray = uang.split('.');
        
        if ($.isArray(chekArray)) {
            var rev = parseInt(chekArray[0], 10).toString().split('').reverse().join('');
            var rev2 = '';
            for (var w = 0; w < rev.length; w++) {
                rev2 += rev[w];
                if ((w+ 1) % 3 === 0 && w !== (rev.length - 1)) {
                    rev2 += '.';
                }
            }
            
            if(uang!='NaN'){                
              if(chekArray[1]==undefined){
                  return 'Rp. ' + rev2.split('').reverse().join('') + ',' +'00';            
              }else if(chekArray[1]!=undefined){
                return 'Rp. ' + rev2.split('').reverse().join('') + ',' +chekArray[1];            
                }
            }
            else if(uang=='NaN'){
               //return 'Rp. 0,00'
            }
           
            else if(uang=='undefined'){
               return 'Rp. 0,00'
            }
        } 
    }
    function SetQty(kelas)
    {      
        
        var uang=$('.'+kelas).val();
        uang=uang.replace(',', '.')
        uang=parseFloat(uang).toFixed(2);
        var pisah = new Array();
        var chekArray;        
        chekArray = uang.split('.');
        
        if ($.isArray(chekArray)) {
            var rev = parseInt(chekArray[0], 10).toString().split('').reverse().join('');
            var rev2 = '';
            for (var s = 0; s < rev.length; s++) {
                rev2 += rev[s];
                if ((s + 1) % 3 === 0 && s !== (rev.length - 1)) {
                    rev2 += '.';
                }
            }
            
            if(uang!='NaN' && uang!=''){                
              if(chekArray[1]==undefined){
                  var nilai =rev2.split('').reverse().join('') + ',' +'00';                  
                  $('.'+kelas).val(nilai);            
              }else if(chekArray[1]!=undefined){
                $('.'+kelas).val(rev2.split('').reverse().join('') + ',' +chekArray[1]);            
                }
            }
            else if(uang=='NaN'){
                $('.'+kelas).val('');               
            }
           
            else if(uang=='undefined'){                
               $('.'+kelas).val(' 0,00');
            }
        } 
    }
    
// function hitungTotal(data){        
//    var total=0;
//    for(jkl = 0; jkl <data.length; jkl++){
//     if(data[jkl]!=undefined && data[jkl]!='NaN')         
//        total = parseFloat(total) + parseFloat(data[jkl]);
//    }    
//    
//    return parseFloat(total).toFixed(2);
//  }
  
 