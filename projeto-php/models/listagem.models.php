<?php
class VoosModel {

    private $voos = [
        [
            'numero_voo' => 'AA123',
            'origem' => 'São Paulo',
            'destino' => 'Rio de Janeiro',
            'data' => '2023-12-01',
            'horario' => '14:00',
            'status' => 'Confirmado'
        ],
        [
            'numero_voo' => 'BB456',
            'origem' => 'Brasília',
            'destino' => 'Recife',
            'data' => '2023-12-02',
            'horario' => '09:30',
            'status' => 'Atrasado'
        ],
        [
            'numero_voo' => 'CC789',
            'origem' => 'Salvador',
            'destino' => 'Fortaleza',
            'data' => '2023-12-03',
            'horario' => '19:45',
            'status' => 'Cancelado'
        ]
    ];

    // Retorna todos os voos
    public function getVoos() {
        return $this->voos;
    }
    public function adicionarVoo($numero_voo, $origem, $destino, $data, $horario, $status) {
        $novoVoo = [
            'numero_voo' => $numero_voo,
            'origem' => $origem,
            'destino' => $destino,
            'data' => $data,
            'horario' => $horario,
            'status' => $status
        ];
    
        // Adiciona o novo voo ao array de voos
        $this->voos[] = $novoVoo;
    }    
}
