<?php if ($_FILES && $_FILES['userfile']['name'] !== "") {
    if (!$this->upload->do_upload()) {
           $data['upload_error'] = $this->upload->display_errors('<span style="color: red;">', '</span>');
           $this->load->view('optional_uploads',$data);
    } else {
           $file_info = $this->upload->data();
           $form_data = array(
                 'img_caption' => $this->input->post(),
                 'filename' => $file_info['file_name'],
           );

           var_dump($form_data);
     }
 } else {
     $file_info = $this->upload->data();

     $form_data = array(
          'filename' => $file_info['file_name'],
     );

     var_dump($form_data);
 }
?>