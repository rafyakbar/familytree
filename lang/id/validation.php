<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi
    |--------------------------------------------------------------------------
    |
    | Berikut adalah baris bahasa yang berisi pesan kesalahan default yang digunakan oleh
    | kelas validator. Beberapa aturan memiliki beberapa versi
    | seperti aturan ukuran. Silakan sesuaikan masing-masing pesan di sini.
    |
    */

    'accepted'        => 'Kolom :attribute harus diterima.',
    'accepted_if'     => 'Kolom :attribute harus diterima ketika :other adalah :value.',
    'active_url'      => 'Kolom :attribute harus berupa URL yang valid.',
    'after'           => 'Kolom :attribute harus berupa tanggal setelah :date.',
    'after_or_equal'  => 'Kolom :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha'           => 'Kolom :attribute hanya boleh berisi huruf.',
    'alpha_dash'      => 'Kolom :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num'       => 'Kolom :attribute hanya boleh berisi huruf dan angka.',
    'array'           => 'Kolom :attribute harus berupa array.',
    'ascii'           => 'Kolom :attribute hanya boleh berisi karakter alfanumerik dan simbol satu byte.',
    'before'          => 'Kolom :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Kolom :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'array'   => 'Kolom :attribute harus memiliki antara :min dan :max item.',
        'file'    => 'Kolom :attribute harus antara :min dan :max kilobyte.',
        'numeric' => 'Kolom :attribute harus antara :min dan :max.',
        'string'  => 'Kolom :attribute harus antara :min dan :max karakter.',
    ],
    'boolean'           => 'Kolom :attribute harus true atau false.',
    'can'               => 'Kolom :attribute mengandung nilai yang tidak sah.',
    'confirmed'         => 'Konfirmasi kolom :attribute tidak cocok.',
    'current_password'  => 'Kata sandi tidak benar.',
    'date'              => 'Kolom :attribute harus berupa tanggal yang valid.',
    'date_equals'       => 'Kolom :attribute harus berupa tanggal sama dengan :date.',
    'date_format'       => 'Kolom :attribute harus sesuai dengan format :format.',
    'decimal'           => 'Kolom :attribute harus memiliki :decimal tempat desimal.',
    'declined'          => 'Kolom :attribute harus ditolak.',
    'declined_if'       => 'Kolom :attribute harus ditolak ketika :other adalah :value.',
    'different'         => 'Kolom :attribute dan :other harus berbeda.',
    'digits'            => 'Kolom :attribute harus berisi :digits digit.',
    'digits_between'    => 'Kolom :attribute harus berada di antara :min dan :max digit.',
    'dimensions'        => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'          => 'Kolom :attribute memiliki nilai duplikat.',
    'doesnt_end_with'   => 'Kolom :attribute tidak boleh diakhiri dengan salah satu dari berikut: :values.',
    'doesnt_start_with' => 'Kolom :attribute tidak boleh diawali dengan salah satu dari berikut: :values.',
    'email'             => 'Kolom :attribute harus berupa alamat email yang valid.',
    'ends_with'         => 'Kolom :attribute harus diakhiri dengan salah satu dari berikut: :values.',
    'enum'              => 'Kolom :attribute yang dipilih tidak valid.',
    'exists'            => 'Kolom :attribute yang dipilih tidak valid.',
    'file'              => 'Kolom :attribute harus berupa file.',
    'filled'            => 'Kolom :attribute harus memiliki nilai.',
    'gt'                => [
        'array'   => 'Kolom :attribute harus memiliki lebih dari :value item.',
        'file'    => 'Kolom :attribute harus lebih besar dari :value kilobyte.',
        'numeric' => 'Kolom :attribute harus lebih besar dari :value.',
        'string'  => 'Kolom :attribute harus lebih dari :value karakter.',
    ],
    'gte' => [
        'array'   => 'Kolom :attribute harus memiliki :value item atau lebih.',
        'file'    => 'Kolom :attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'numeric' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value.',
        'string'  => 'Kolom :attribute harus lebih besar dari atau sama dengan :value karakter.',
    ],
    'image'     => 'Kolom :attribute harus berupa gambar.',
    'in'        => 'Kolom :attribute yang dipilih tidak valid.',
    'in_array'  => 'Kolom :attribute harus ada di :other.',
    'integer'   => 'Kolom :attribute harus berupa bilangan bulat.',
    'ip'        => 'Kolom :attribute harus berupa alamat IP yang valid.',
    'ipv4'      => 'Kolom :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'      => 'Kolom :attribute harus berupa alamat IPv6 yang valid.',
    'json'      => 'Kolom :attribute harus berupa string JSON yang valid.',
    'lowercase' => 'Kolom :attribute harus ditulis dengan huruf kecil.',
    'lt'        => [
        'array'   => 'Kolom :attribute harus memiliki kurang dari :value item.',
        'file'    => 'Kolom :attribute harus kurang dari :value kilobyte.',
        'numeric' => 'Kolom :attribute harus kurang dari :value.',
        'string'  => 'Kolom :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array'   => 'Kolom :attribute tidak boleh memiliki lebih dari :value item.',
        'file'    => 'Kolom :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => 'Kolom :attribute harus kurang dari atau sama dengan :value.',
        'string'  => 'Kolom :attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Kolom :attribute harus berupa alamat MAC yang valid.',
    'max'         => [
        'array'   => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
        'file'    => 'Kolom :attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Kolom :attribute tidak boleh lebih besar dari :max.',
        'string'  => 'Kolom :attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => 'Kolom :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes'      => 'Kolom :attribute harus berupa file dari tipe: :values.',
    'mimetypes'  => 'Kolom :attribute harus berupa file dari tipe: :values.',
    'min'        => [
        'array'   => 'Kolom :attribute harus memiliki minimal :min item.',
        'file'    => 'Kolom :attribute harus minimal :min kilobyte.',
        'numeric' => 'Kolom :attribute harus minimal :min.',
        'string'  => 'Kolom :attribute harus minimal :min karakter.',
    ],
    'min_digits'       => 'Kolom :attribute harus memiliki minimal :min digit.',
    'missing'          => 'Kolom :attribute harus hilang.',
    'missing_if'       => 'Kolom :attribute harus hilang ketika :other adalah :value.',
    'missing_unless'   => 'Kolom :attribute harus hilang kecuali :other ada di :values.',
    'missing_with'     => 'Kolom :attribute harus hilang ketika :values ada.',
    'missing_with_all' => 'Kolom :attribute harus hilang ketika :values ada.',
    'multiple_of'      => 'Kolom :attribute harus merupakan kelipatan dari :value.',
    'not_in'           => 'Kolom :attribute yang dipilih tidak valid.',
    'not_regex'        => 'Format kolom :attribute tidak valid.',
    'numeric'          => 'Kolom :attribute harus berupa angka.',
    'password'         => [
        'letters'       => 'Kolom :attribute harus mengandung setidaknya satu huruf.',
        'mixed'         => 'Kolom :attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers'       => 'Kolom :attribute harus mengandung setidaknya satu angka.',
        'symbols'       => 'Kolom :attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => 'Kolom :attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],
    'present'              => 'Kolom :attribute harus ada.',
    'prohibited'           => 'Kolom :attribute dilarang.',
    'prohibited_if'        => 'Kolom :attribute dilarang ketika :other adalah :value.',
    'prohibited_unless'    => 'Kolom :attribute dilarang kecuali :other ada di :values.',
    'prohibits'            => 'Kolom :attribute melarang :other untuk ada.',
    'regex'                => 'Format kolom :attribute tidak valid.',
    'required'             => 'Kolom :attribute wajib diisi.',
    'required_array_keys'  => 'Kolom :attribute harus berisi entri untuk: :values.',
    'required_if'          => 'Kolom :attribute wajib diisi ketika :other adalah :value.',
    'required_if_accepted' => 'Kolom :attribute wajib diisi ketika :other diterima.',
    'required_unless'      => 'Kolom :attribute wajib diisi kecuali :other ada di :values.',
    'required_with'        => 'Kolom :attribute wajib diisi ketika :values ada.',
    'required_with_all'    => 'Kolom :attribute wajib diisi ketika :values ada.',
    'required_without'     => 'Kolom :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute wajib diisi ketika tidak ada dari :values yang ada.',
    'same'                 => 'Kolom :attribute harus sama dengan :other.',
    'size'                 => [
        'array'   => 'Kolom :attribute harus mengandung :size item.',
        'file'    => 'Kolom :attribute harus :size kilobyte.',
        'numeric' => 'Kolom :attribute harus :size.',
        'string'  => 'Kolom :attribute harus :size karakter.',
    ],
    'starts_with' => 'Kolom :attribute harus diawali dengan salah satu dari berikut: :values.',
    'string'      => 'Kolom :attribute harus berupa string.',
    'timezone'    => 'Kolom :attribute harus berupa zona waktu yang valid.',
    'unique'      => 'Kolom :attribute telah diambil.',
    'uploaded'    => 'Kolom :attribute gagal diunggah.',
    'uppercase'   => 'Kolom :attribute harus dalam huruf kapital.',
    'url'         => 'Kolom :attribute harus berupa URL yang valid.',
    'ulid'        => 'Kolom :attribute harus berupa ULID yang valid.',
    'uuid'        => 'Kolom :attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut menggunakan
    | konvensi "attribute.rule" untuk menamai baris. Ini membuatnya cepat untuk
    | menentukan baris bahasa kustom tertentu untuk aturan atribut tertentu.
    |
    */

    'surname.required_without'   => 'Saat menambahkan orang BARU, nama belakang diperlukan.',
    'person_id.required_without' => 'Saat menambahkan orang yang ADA, pilih orangnya.',

    /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Berikut adalah baris bahasa yang digunakan untuk mengganti penempatan atribut
    | dengan sesuatu yang lebih ramah pembaca seperti Alamat E-Mail daripada
    | "email". Ini membantu kami membuat pesan sedikit lebih bersih.
    |
    */

    'attributes' => [],
];
