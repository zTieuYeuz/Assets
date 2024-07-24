<?php

return [

    'undeployable' 		=> '<strong>Warning: </strong> This asset has been marked as currently undeployable. If this status has changed, please update the asset status.',
    'does_not_exist' 	=> 'Хөрөнгө байхгүй байна.',
    'does_not_exist_var'=> 'Asset with tag :asset_tag not found.',
    'no_tag' 	        => 'No asset tag provided.',
    'does_not_exist_or_not_requestable' => 'That asset does not exist or is not requestable.',
    'assoc_users'	 	=> 'Энэ хөрөнгийг одоогоор хэрэглэгчид шалгаж, устгах боломжгүй байна. Эхлээд хөрөнгийг шалгаж үзээд дараа нь устга.',
    'warning_audit_date_mismatch' 	=> 'This asset\'s next audit date (:next_audit_date) is before the last audit date (:last_audit_date). Please update the next audit date.',

    'create' => [
        'error'   		=> 'Акт үүсгээгүй байна, дахин оролдоно уу. :(',
        'success' 		=> 'Хөрөнгө амжилттай болсон. :)',
        'success_linked' => 'Asset with tag :tag was created successfully. <strong><a href=":link" style="color: white;">Click here to view</a></strong>.',
    ],

    'update' => [
        'error'   			=> 'Хөрөнгийн шинэчлэлт хийгдээгүй тул дахин оролдоно уу',
        'success' 			=> 'Акт амжилттай шинэчлэгдсэн.',
        'encrypted_warning' => 'Asset updated successfully, but encrypted custom fields were not due to permissions',
        'nothing_updated'	=>  'Ямар ч талбар сонгогдоогүй тул шинэчлэгдээгүй байна.',
        'no_assets_selected'  =>  'No assets were selected, so nothing was updated.',
        'assets_do_not_exist_or_are_invalid' => 'Selected assets cannot be updated.',
    ],

    'restore' => [
        'error'   		=> 'Хөрөнгө сэргээгээгүй байна, дахин оролдоно уу',
        'success' 		=> 'Хөрөнгийн амжилттай сэргээгдэв.',
        'bulk_success' 		=> 'Хөрөнгийн амжилттай сэргээгдэв.',
        'nothing_updated'   => 'No assets were selected, so nothing was restored.', 
    ],

    'audit' => [
        'error'   		=> 'Asset audit unsuccessful: :error ',
        'success' 		=> 'Хөрөнгийн аудит амжилттай нэвтэрсэн байна.',
    ],


    'deletefile' => [
        'error'   => 'Файлыг устгаагүй байна. Дахин оролдоно уу.',
        'success' => 'Файл амжилттай устгагдсан.',
    ],

    'upload' => [
        'error'   => 'Файлд байршуулаагүй файл. Дахин оролдоно уу.',
        'success' => 'Файлууд амжилттай байршуулсан.',
        'nofiles' => 'Та байршуулах ямар ч файл сонгоогүй, эсвэл байршуулах гэж буй файл хэт том байна',
        'invalidfiles' => 'Таны файлуудын нэг юмуу хэд нь хэтэрхий том юмуу эсвэл файлын төрлийг зөвшөөрдөггүй. Зөвшөөрөгдсөн filetypes нь png, gif, jpg, doc, docx, pdf, болон txt байна.',
    ],

    'import' => [
        'import_button'         => 'Process Import',
        'error'                 => 'Зарим зүйлс зөв импорт хийгдээгүй байна.',
        'errorDetail'           => 'Дараах зүйлсийг алдааны улмаас импортолсонгүй.',
        'success'               => 'Таны файл импортлогдсон байна',
        'file_delete_success'   => 'Таны файл амжилттай болсон байна',
        'file_delete_error'      => 'Файл устгагдах боломжгүй байна',
        'file_missing' => 'The file selected is missing',
        'header_row_has_malformed_characters' => 'One or more attributes in the header row contain malformed UTF-8 characters',
        'content_row_has_malformed_characters' => 'One or more attributes in the first row of content contain malformed UTF-8 characters',
    ],


    'delete' => [
        'confirm'   	=> 'Та энэ хөрөнгийг устгахыг хүсч байна уу?',
        'error'   		=> 'Хөрөнгийг устгах асуудал гарлаа. Дахин оролдоно уу.',
        'nothing_updated'   => 'Ямар ч хөрөнгө сонгогдоогүй тул юу ч устгаагүй.',
        'success' 		=> 'Хөрөнгийг амжилттай устгасан байна.',
    ],

    'checkout' => [
        'error'   		=> 'Хөрөнгийг шалгаагүй байна, дахин оролдоно уу',
        'success' 		=> 'Акт амжилттай шалгасан.',
        'user_does_not_exist' => 'Энэ хэрэглэгч буруу байна. Дахин оролдоно уу.',
        'not_available' => 'Энэ хөрөнгийг татаж авахад бэлэн биш байна!',
        'no_assets_selected' => 'Жагсаалтаас доод тал нь нэг хөрөнгийг сонгоно уу',
    ],

    'checkin' => [
        'error'   		=> 'Хөрөнгө оруулаагүй байна, дахин оролдоно уу',
        'success' 		=> 'Хөрөнгө амжилттай шалгагдсан.',
        'user_does_not_exist' => 'Энэ хэрэглэгч буруу байна. Дахин оролдоно уу.',
        'already_checked_in'  => 'Энэ аккаунтыг аль хэдийн шалгасан байна.',

    ],

    'requests' => [
        'error'   		=> 'Акт хүсээгүй тул дахин оролдоно уу',
        'success' 		=> 'Хөрөнгө амжилттай ирэв.',
        'canceled'      => 'Тооцоо хийх хүсэлт амжилттай цуцлагдсан',
    ],

];
