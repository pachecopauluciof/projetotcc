
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">August 08, 2017 - August 08, 2017</span>
                    </div>
                </div>
                <div class="col p-md-0 justify-content-end d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Mesas</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <h3 class="content-heading">Mesas cadastradas</h3>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="tabela-mesa"></div>
                            </div>
                        </div>            
                    </div>
                </div>

                <div class="row">
                    
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!-- MODALS -->


        <div id="modal_add_mesa" class="modal fade">
	
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">X</button>
				<h4 class="modal-title">Cursos</h4>
			</div>

			<div class="modal-body">
				<form id="form_course">
					<input id="course_id" type="hidden" name="course_id">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nome</label>
						<div class="col-lg-10">
							<input type="text" id="course_name" name="course_name" class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Imagem</label>
						<div class="col-lg-10">
							<img src="" id="course_img_path" style="max-height: 400px; max-height: 400px;">
							<label class="btn btn-block btn-info">
								<i class="fa fa-upload"></i> &nbsp; Importar imagem
								<input type="file" id="btn_upload_course_img" accept="image/*" style="display: none;" name="">
							</label>
							
							<input id="course_img" name="course_img">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Duração (h)</label>
						<div class="col-lg-10">
							<input step="1.1" id="course_duration" min="0" name="course_duration" class="form-control">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Descrição</label>
						<div class="col-lg-10">
							<textarea id="course_description" name="course_description" class="form-control"> </textarea>
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_course" class="btn btn-primary">
							<i class="fa fa-save"></i>&nbsp; Salvar
						</button>
						<span class="help-block"></span>
					</div>
				</form>


			</div>

		</div>
	</div>

</div>
        