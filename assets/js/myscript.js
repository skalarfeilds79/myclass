let base_url = "http://localhost/project_portofolio/myclass/";

$(function () {
	$(".nav-link").hover(
		function (e) {
			e.target.classList.add("shadow-sm");
		},
		function (e) {
			e.target.classList.remove("shadow-sm");
		}
	);
});

$(function () {
	$(".delete-button").on("click", function () {
		const id = $(this).data("id_student");
		console.log(id);
		$(".modal-footer a").attr(
			"href",
			`${base_url}student_list/deleteStudent/${id}`
		);
		console.log("aaaaaaa");
	});
});

$(function () {
	$(".updateData-button").on("click", function () {
		// console.log("update-button");
		$(".modal-title").html("Update Data Siswa");
		$(".modal-footer input").val("Update Data");

		$(".modal-body form").attr("action", `${base_url}student_list/update`);
		const id = $(this).data("id");
		// console.log(id);

		$.ajax({
			url: `${base_url}student_list/getedit`,
			data: { id },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#id").val(data.id);
				$("#name").val(data.nama);
				$("#nisn").val(data.nisn);
				$("#email").val(data.email);
				$("#hp").val(data.hp);
				$("#major").val(data.jurusan);

				console.log(data);
			},
		});
	});
});

$(function () {
	$(".editSchedule").on("click", function () {		
		const id = $(this).data("id");
		console.log(id);

		$.ajax({
			url: `${base_url}lesson_schedule/getedit`,
			data: { id },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#id_schedule").val(data.id);				
				$("#jam").val(data.jam);				
				$("#senin").val(data.senin);				
				$("#selasa").val(data.selasa);				
				$("#rabu").val(data.rabu);				
				$("#kamis").val(data.kamis);				
				$("#jumat").val(data.jumat);				
				$("#sabtu").val(data.sabtu);				

				console.log(data);
			},
		});
	});
});

$(function() {
	$('.edit-picket').on('click', function() {
		const hari = $(this).data("hari");
		console.log(hari);
		$('.modal-title').html(`Edit Piket ${hari}`)
		$('.modal-footer input').val(`Edit Piket ${hari}`)

		$.ajax({
			url: `${base_url}picket_schedule/getedit`,
			data: { hari },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#id").val(data.id);				
				$("#hari").val(data.hari);				
				$("#nama_1").val(data.nama_1);				
				$("#nama_2").val(data.nama_2);				
				$("#nama_3").val(data.nama_3);				
				$("#nama_4").val(data.nama_4);				
				$("#nama_5").val(data.nama_5);				
				$("#nama_6").val(data.nama_6);
								console.log(data);
			},
	})
})
})
