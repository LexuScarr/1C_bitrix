function removeElement(arr, sElement)
{
	var tmp = new Array();
	for (var i = 0; i<arr.length; i++) if (arr[i] != sElement) tmp[tmp.length] = arr[i];
	arr=null;
	arr=new Array();
	for (var i = 0; i<tmp.length; i++) arr[i] = tmp[i];
	tmp = null;
	return arr;
}

function SectionClick(id)
{
	var div = document.getElementById('user_div_'+id);
	if (div.className == "profile-block-hidden")
	{
		opened_sections[opened_sections.length]=id;
	}
	else
	{
		opened_sections = removeElement(opened_sections, id);
	}

	document.cookie = cookie_prefix + "_user_profile_open=" + opened_sections.join(",") + "; expires=Thu, 31 Dec 2020 23:59:59 GMT; path=/;";
	div.className = div.className == 'profile-block-hidden' ? 'profile-block-shown' : 'profile-block-hidden';
}

// ajax
$(document).ready(function () {
	// Персональные данные
	$('.personal-form__btn[name="save_pers"]').click(function (e) {
		e.preventDefault();
		performAjaxSubmit('#form_pers', '/local/templates/.default/components/bitrix/main.profile/jet_profile_new/ajax/personal_info.php');
	});

	// Смена пароля
	$('.personal-form__btn[name="save_pass"]').click(function (e) {
		e.preventDefault();
		let formData = $('#form_pass').serialize() + '&sessid=' + BX.bitrix_sessid();
		performAjaxSubmit('#form_pass', '/local/templates/.default/components/bitrix/main.profile/jet_profile_new/ajax/personal_pass.php', formData);
	});

	function performAjaxSubmit(formSelector, url, formData = $(formSelector).serialize()) {
		$.ajax({
			type: 'POST',
			url: url,
			data: formData,
			dataType: 'json',
			success: function (response) {
				handleAjaxSuccess(response);
			},
			error: function (xhr, status, error) {
				handleAjaxError(error);
			}
		});
	}

	function handleAjaxSuccess(response) {
		if (response.status === 'success') {
			alert('Изменения сохранены успешно.');
			location.reload();
		} else {
			alert('Ошибка: ' + response.message);
		}
	}

	function handleAjaxError(error) {
		alert('Произошла ошибка при отправке данных: ' + error);
		console.error('Ошибка при отправке данных:', error);
	}
});
