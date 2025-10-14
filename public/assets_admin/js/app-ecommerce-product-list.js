// 'use strict';

// $(function () {
//   let borderColor, bodyBg, headingColor;

//   if (isDarkStyle) {
//     borderColor = config.colors_dark.borderColor;
//     bodyBg = config.colors_dark.bodyBg;
//     headingColor = config.colors_dark.headingColor;
//   } else {
//     borderColor = config.colors.borderColor;
//     bodyBg = config.colors.bodyBg;
//     headingColor = config.colors.headingColor;
//   }

//   var dt_product_table = $('.datatables-products');

//   if (dt_product_table.length) {
//     var dt_products = dt_product_table.DataTable({
//       // 🔻 KOMENTAR: Jika ingin gunakan data dari JavaScript (tidak pakai Blade)
//       /*
//       data: [
//         {
//           id: 1,
//           nama_pengguna: "Cinta Adenia",
//           nama_sales: "Doni",
//           status: 2
//         },
//         {
//           id: 2,
//           nama_pengguna: "Rizky",
//           nama_sales: "Dewi",
//           status: 1
//         }
//       ],
//       columns: [
//         { data: 'id' },
//         { data: 'nama_pengguna' },
//         { data: 'nama_sales' },
//         { data: 'status' },
//         { data: null }
//       ],
//       */

//       columnDefs: [
//         {
//           targets: 3, // Kolom Status
//           render: function (data) {
//             // Jika pakai angka status (1, 2, 3) aktifkan ini:
//             /*
//             const statusObj = {
//               1: { title: 'Scheduled', class: 'bg-label-warning' },
//               2: { title: 'Publish', class: 'bg-label-success' },
//               3: { title: 'Inactive', class: 'bg-label-danger' }
//             };
//             const status = statusObj[data] || { title: 'Unknown', class: 'bg-label-secondary' };
//             return '<span class="badge ' + status.class + '">' + status.title + '</span>';
//             */

//             // Jika data status dari Blade dalam bentuk teks:
//             const statusText = (data || '').toString().toLowerCase();
//             let status = { title: 'Unknown', class: 'bg-label-secondary' };

//             if (statusText.includes('selesai')) {
//               status = { title: 'Selesai', class: 'bg-success' };
//             } else if (statusText.includes('pending')) {
//               status = { title: 'Pending', class: 'bg-warning text-dark' };
//             } else if (statusText.includes('batal') || statusText.includes('dibatalkan')) {
//               status = { title: 'Dibatalkan', class: 'bg-danger' };
//             }

//             return '<span class="badge ' + status.class + '">' + status.title + '</span>';
//           }
//         },
//         {
//           targets: 4, // Kolom Aksi
//           title: 'Aksi',
//           orderable: false,
//           searchable: false,
//           render: function () {
//             return (
//               '<div class="d-inline-block text-nowrap">' +
//                 '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit">' +
//                   '<i class="ti ti-edit ti-md"></i>' +
//                 '</button>' +
//                 '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
//                   '<i class="ti ti-dots-vertical ti-md"></i>' +
//                 '</button>' +
//                 '<div class="dropdown-menu dropdown-menu-end m-0">' +
//                   '<a href="javascript:;" class="dropdown-item">View</a>' +
//                   '<a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>' +
//                 '</div>' +
//               '</div>'
//             );
//           }
//         }
//       ],

//       // 🔻 KOMENTAR: Sorting berdasarkan kolom (jika pakai columns dari JS)
//       // order: [[1, 'asc']],

//       dom:
//         '<"card-header d-flex border-top rounded-0 flex-wrap py-0 flex-column flex-md-row align-items-start"' +
//         '<"me-5 ms-n4 pe-5 mb-n6 mb-md-0"f>' +
//         '<"d-flex justify-content-start justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex flex-column align-items-start align-items-sm-center justify-content-sm-center pt-0 gap-sm-4 gap-sm-0 flex-sm-row"lB>>' +
//         '>t' +
//         '<"row"' +
//         '<"col-sm-12 col-md-6"i>' +
//         '<"col-sm-12 col-md-6"p>' +
//         '>',
//       buttons: [
//         {
//           extend: 'collection',
//           className: 'btn btn-label-secondary dropdown-toggle me-4 waves-effect waves-light',
//           text: '<i class="ti ti-upload me-1 ti-xs"></i>Export',
//           buttons: [
//             {
//               extend: 'print',
//               text: '<i class="ti ti-printer me-2"></i>Print',
//               className: 'dropdown-item',
//               exportOptions: { columns: [1, 2, 3] }
//             },
//             {
//               extend: 'csv',
//               text: '<i class="ti ti-file me-2"></i>CSV',
//               className: 'dropdown-item',
//               exportOptions: { columns: [1, 2, 3] }
//             },
//             {
//               extend: 'excel',
//               text: '<i class="ti ti-file-export me-2"></i>Excel',
//               className: 'dropdown-item',
//               exportOptions: { columns: [1, 2, 3] }
//             },
//             {
//               extend: 'pdf',
//               text: '<i class="ti ti-file-text me-2"></i>PDF',
//               className: 'dropdown-item',
//               exportOptions: { columns: [1, 2, 3] }
//             },
//             {
//               extend: 'copy',
//               text: '<i class="ti ti-copy me-2"></i>Copy',
//               className: 'dropdown-item',
//               exportOptions: { columns: [1, 2, 3] }
//             }
//           ]
//         },
//         {
//           text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Tambah</span>',
//           className: 'add-new btn btn-primary ms-2 ms-sm-0 waves-effect waves-light',
//           action: function () {
//             var modal = new bootstrap.Modal(document.getElementById('modalToggle'));
//             modal.show();
//           }
//         }
//       ],
//       language: {
//         sLengthMenu: '_MENU_',
//         search: '',
//         searchPlaceholder: 'Cari',
//         info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
//         paginate: {
//           next: '<i class="ti ti-chevron-right ti-sm"></i>',
//           previous: '<i class="ti ti-chevron-left ti-sm"></i>'
//         }
//       },
//       responsive: true
//     });

//     // ✅ Delete dengan konfirmasi SweetAlert
//     $('.datatables-products tbody').on('click', '.delete-record', function () {
//       const row = $(this).parents('tr');
//       Swal.fire({
//         title: 'Apakah Anda yakin?',
//         text: 'Data yang dihapus tidak dapat dikembalikan!',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonText: 'Ya, hapus!',
//         cancelButtonText: 'Batal',
//         customClass: {
//           confirmButton: 'btn btn-danger me-2',
//           cancelButton: 'btn btn-secondary'
//         },
//         buttonsStyling: false
//       }).then((result) => {
//         if (result.isConfirmed) {
//           dt_products.row(row).remove().draw();

//           Swal.fire({
//             title: 'Terhapus!',
//             text: 'Data berhasil dihapus.',
//             icon: 'success',
//             timer: 1500,
//             showConfirmButton: false
//           });
//         }
//       });
//     });

//     // ✅ Edit Modal
//     $(document).on('click', '.btn-edit', function () {
//       $('#modalEdit').modal('show');
//     });

//     // ✅ Hapus style kecil dari input bawaan DataTables
//     setTimeout(() => {
//       $('.dataTables_filter .form-control').removeClass('form-control-sm');
//       $('.dataTables_length .form-select').removeClass('form-select-sm');
//     }, 300);
//   }
// });


'use strict';

$(function () {
  let borderColor, bodyBg, headingColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    bodyBg = config.colors_dark.bodyBg;
    headingColor = config.colors_dark.headingColor;
  } else {
    borderColor = config.colors.borderColor;
    bodyBg = config.colors.bodyBg;
    headingColor = config.colors.headingColor;
  }

  const table = $('.datatables-basic');

  if (table.length) {
    const dt = table.DataTable({
      responsive: true,
      columnDefs: [
        {
          targets: 4, // index dimulai dari 0 isi sesuai banyaknya kolom
          title: 'Aksi',
          orderable: false,
          searchable: false,
          render: function () {
            return (
              '<div class="d-inline-block text-nowrap">' +
                '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit">' +
                  '<i class="ti ti-edit ti-md"></i>' +
                '</button>' +
                '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                  '<i class="ti ti-dots-vertical ti-md"></i>' +
                '</button>' +
                '<div class="dropdown-menu dropdown-menu-end m-0">' +
                  '<a href="javascript:;" class="dropdown-item btn-view" data-bs-toggle="modal" data-bs-target="#modalView">Detail</a>' +
                //   '<a href="javascript:;" class="dropdown-item text-primary btn-print">Print</a>' +
                  '<a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>' +
                '</div>' +
                '<button class="btn btn-sm btn-icon btn-print" title="Print">' +
                    '<i class="ti ti-printer"></i>' +
                '</button>' +
              '</div>'
            );
          }
        }
      ],
      dom:
        '<"card-header d-flex border-top rounded-0 flex-wrap py-0 flex-column flex-md-row align-items-start"' +
        '<"me-5 ms-n4 pe-5 mb-n6 mb-md-0"f>' +
        '<"d-flex justify-content-start justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex flex-column align-items-start align-items-sm-center justify-content-sm-center pt-0 gap-sm-4 gap-sm-0 flex-sm-row"lB>>' +
        '>t' +
        '<"row"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle me-4 waves-effect waves-light',
          text: '<i class="ti ti-upload me-1 ti-xs"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti ti-printer me-2"></i>Print',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'csv',
              text: '<i class="ti ti-file me-2"></i>CSV',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'excel',
              text: '<i class="ti ti-file-export me-2"></i>Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'pdf',
              text: '<i class="ti ti-file-text me-2"></i>PDF',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'copy',
              text: '<i class="ti ti-copy me-2"></i>Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            }
          ]
        },
        {
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Tambah</span>',
          className: 'add-new btn btn-primary ms-2 ms-sm-0 waves-effect waves-light',
          action: function () {
            var modal = new bootstrap.Modal(document.getElementById('modalToggle'));
            modal.show();
          }
        }
      ],
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Cari...',
        info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
        paginate: {
          next: '<i class="ti ti-chevron-right ti-sm"></i>',
          previous: '<i class="ti ti-chevron-left ti-sm"></i>'
        }
      }
    });

    // SweetAlert Delete
    table.on('click', '.delete-record', function () {
      const row = $(this).closest('tr');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        customClass: {
          confirmButton: 'btn btn-danger me-2',
          cancelButton: 'btn btn-secondary'
        },
        buttonsStyling: false
      }).then((result) => {
        if (result.isConfirmed) {
          dt.row(row).remove().draw();
          Swal.fire({
            title: 'Terhapus!',
            text: 'Data berhasil dihapus.',
            icon: 'success',
            timer: 1500,
            showConfirmButton: false
          });
        }
      });
    });

    // Edit Modal
    table.on('click', '.btn-edit', function () {
      $('#modalEdit').modal('show');
    });

    // Print Aksi
    table.on('click', '.btn-print', function () {
      window.open('/print', '_blank'); // Sesuaikan URL jika perlu
    });

    // Hapus style kecil bawaan DataTables
    setTimeout(() => {
      $('.dataTables_filter .form-control').removeClass('form-control-sm');
      $('.dataTables_length .form-select').removeClass('form-select-sm');
    }, 300);
  }
});





//Dekstop

$(function () {
  let borderColor, bodyBg, headingColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    bodyBg = config.colors_dark.bodyBg;
    headingColor = config.colors_dark.headingColor;
  } else {
    borderColor = config.colors.borderColor;
    bodyBg = config.colors.bodyBg;
    headingColor = config.colors.headingColor;
  }

  const table = $('.datatables-desktop');

  if (table.length) {
    const dt = table.DataTable({
      responsive: true,
      columnDefs: [
        {
          targets: 5, // index dimulai dari 0 isi sesuai banyaknya kolom
          title: 'Aksi',
          orderable: false,
          searchable: false,
          render: function () {
            return (
              '<div class="d-inline-block text-nowrap">' +
                '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit">' +
                  '<i class="ti ti-edit ti-md"></i>' +
                '</button>' +
                '<button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                  '<i class="ti ti-dots-vertical ti-md"></i>' +
                '</button>' +
                '<div class="dropdown-menu dropdown-menu-end m-0">' +
                  '<a href="javascript:;" class="dropdown-item btn-view" data-bs-toggle="modal" data-bs-target="#modalView">Detail</a>' +
                //   '<a href="javascript:;" class="dropdown-item text-primary btn-print">Print</a>' +
                  '<a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>' +
                '</div>' +
                '<button class="btn btn-sm btn-icon btn-print" title="Print">' +
                    '<i class="ti ti-printer"></i>' +
                '</button>' +
              '</div>'
            );
          }
        }
      ],
      dom:
        '<"card-header d-flex border-top rounded-0 flex-wrap py-0 flex-column flex-md-row align-items-start"' +
        '<"me-5 ms-n4 pe-5 mb-n6 mb-md-0"f>' +
        '<"d-flex justify-content-start justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex flex-column align-items-start align-items-sm-center justify-content-sm-center pt-0 gap-sm-4 gap-sm-0 flex-sm-row"lB>>' +
        '>t' +
        '<"row"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle me-4 waves-effect waves-light',
          text: '<i class="ti ti-upload me-1 ti-xs"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti ti-printer me-2"></i>Print',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'csv',
              text: '<i class="ti ti-file me-2"></i>CSV',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'excel',
              text: '<i class="ti ti-file-export me-2"></i>Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'pdf',
              text: '<i class="ti ti-file-text me-2"></i>PDF',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'copy',
              text: '<i class="ti ti-copy me-2"></i>Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            }
          ]
        },
        // {
        //   text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Tambah</span>',
        //   className: 'add-new btn btn-primary ms-2 ms-sm-0 waves-effect waves-light',
        //   action: function () {
        //     var modal = new bootstrap.Modal(document.getElementById('modalToggle'));
        //     modal.show();
        //   }
        // }
      ],
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Cari...',
        info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
        paginate: {
          next: '<i class="ti ti-chevron-right ti-sm"></i>',
          previous: '<i class="ti ti-chevron-left ti-sm"></i>'
        }
      }
    });

    // SweetAlert Delete
    table.on('click', '.delete-record', function () {
      const row = $(this).closest('tr');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        customClass: {
          confirmButton: 'btn btn-danger me-2',
          cancelButton: 'btn btn-secondary'
        },
        buttonsStyling: false
      }).then((result) => {
        if (result.isConfirmed) {
          dt.row(row).remove().draw();
          Swal.fire({
            title: 'Terhapus!',
            text: 'Data berhasil dihapus.',
            icon: 'success',
            timer: 1500,
            showConfirmButton: false
          });
        }
      });
    });

    // Edit Modal
    table.on('click', '.btn-edit', function () {
      $('#modalEdit').modal('show');
    });

    // Print Aksi
    table.on('click', '.btn-print', function () {
      window.open('/print', '_blank'); // Sesuaikan URL jika perlu
    });

    // Hapus style kecil bawaan DataTables
    setTimeout(() => {
      $('.dataTables_filter .form-control').removeClass('form-control-sm');
      $('.dataTables_length .form-select').removeClass('form-select-sm');
    }, 300);
  }
});
