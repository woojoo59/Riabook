<form action="<?=base_url()?>master/editnovel" method="post">
	<div class="rdiv"><div class="rdiv1">소설 제목 : </div><div class="rdiv2"><?=$subject?></div></div>
	<div class="rdiv"><div class="rdiv1">타이틀 : </div><div class="rdiv2"><?=$title?></div></div>
	<div class="rdiv"><div class="rdiv1">작가 : </div><div class="rdiv2"><?=$nickname?></div></div>
	<div class="rdiv"><div class="rdiv1">조회 수 : </div><div class="rdiv2"><?=$hit?></div></div>
	<div class="rdiv"><div class="rdiv1">상태 : </div><div class="rdiv2">
		<select name="status">
			<option value="0" <?php if($status == 0){echo 'selected'; } ?> >공개</option>
			<option value="1" <?php if($status == 1){echo 'selected'; } ?> >비 공개</option>
		</select>
	</div></div>
	<div class="rdiv"><div class="rdiv1">내용 : </div><div class="rdiv2"><?=$content?></div></div>
	<div class="rdiv"><div class="rdiv1"></div><div class="rdiv2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="penalty" value="2" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    해당 유저 경고 쪽지
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="penalty" value="0" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    해당 유저 경고 +1
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="penalty" value="1" id="flexRadioDefault3">
  <label class="form-check-label" for="flexRadioDefault3">
    해당 유저 정지
  </label>
</div>
<input type="radio" name="penalty" class="dn" id="dnradio" checked>
	</div></div>
	<input type="hidden" name="novelidx" value="<?=$novelidx?>">
	<div class="botdiv"><button class="repotbtn">수정</button></div>
</form>
<script type="text/javascript">
	
	$('#flexRadioDefault1').on('click',()=>{
		dnradio()
	})
	$('#flexRadioDefault2').on('click',()=>{
		dnradio()
	})
	$('#flexRadioDefault3').on('click',()=>{
		dnradio()
	})
	function dnradio(){
		if(defaultradio == $('input[type=radio][name=penalty]:checked').val()){
			$('#dnradio').trigger('click');
		}
		defaultradio = $('input[type=radio][name=penalty]:checked').val()
	}
</script>