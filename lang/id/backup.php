<?php

return [
    // Label
    'backup'  => 'Cadangan',
    'backups' => 'Cadangan',
    'no_data' => 'Tidak ada cadangan tersedia.',

    // Aksi
    'create'        => 'Cadangan baru',
    'download'      => 'Unduh',
    'delete'        => 'Hapus',
    'delete_backup' => 'cadangan ini',

    // Atribut
    'id'      => '#',
    'file'    => 'Berkas',
    'size'    => 'Ukuran',
    'date'    => 'Tanggal',
    'age'     => 'Usia',
    'actions' => 'Aksi',

    // Komentar
    'backup_daily'  => 'Cadangan dibuat secara otomatis setiap hari (pada pukul ' . config('app.backup_daily_run') . ').',
    'backup_email'  => 'Sebuah email akan dikirim ke alamat email aplikasi Anda setelah setiap cadangan.',
    'backup_cron_1' => 'Cadangan dapat diotomatisasi (dijalankan setiap hari) dengan menjalankan pekerjaan cron berikut di server produksi Anda :',
    'backup_cron_2' => '* * * * * cd /path_to_your_application && php artisan schedule:run >> /dev/null 2>&1',

    // Pesan
    'created'     => 'Cadangan baru telah disimpan.',
    'deleted'     => 'telah dihapus.',
    'downloading' => 'Unduhan telah dimulai.',
    'failed'      => 'Cadangan gagal.',
    'not_found'   => 'Cadangan tidak ditemukan.',
];
