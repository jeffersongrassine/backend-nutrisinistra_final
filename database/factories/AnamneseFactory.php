<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anamnese>
 */
class AnamneseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'preencheuFormulario' => $this->faker->boolean(),
        'dataPreencimento' => $this->faker->boolean(),
        'enfermidades' => $this->faker->json_encode([
            'Diabete',
            'Gastrite',
            'Obesidade'

   
        
        ]),
        'usaMedicacao' => $this->faker->boolean(),
        'quaisMedicacoes' => $this->faker->sentence(20),
        'fezExamesUltimosSeisMeses' => $this->faker->boolean(),
        'doencasFamiliares'=> $this->faker->toArray([
            'Diabete',
            'Gastrite',
            'Obesidade'
        ]),
        'fumante'=> $this->faker->boolean(),
        'bebidaAlcoolica'=> $this->faker->boolean(),
        'horasSono' => $this->faker->range(1,10),
        'qualidadeSono'=> $this->faker->word(),
        'nivelEstresse' => $this->faker->word(),
        'mastigacao' => $this->faker->word(),
        'alergiaAlimentar'=> $this->faker->boolean(),
        'qualAlergia'=> $this->faker->sentence(),
        'temAlimentoQueNaoGosta'=> $this->faker->boolean(),
        'qualAlimentoNaoGosta'=> $this->faker->sentence(),
        'desconfortoGastrico'=> $this->faker->boolean(),
        'qualDesconforto'=> $this->faker->sentence(20),
        'corUrina'=> $this->faker->word(),
        'altura'=> $this->faker->range(120,200),
        'pesoAtual'=> $this->faker->range(55,130),
        'maiorPeso'=> $this->faker->range(55,130),
        'pesoDesejado'=> $this->faker->range(55,130),
        'fazAtividadeFisica'=> $this->faker->boolean(),
        'qualAtividade'=> $this->faker->sentence(20),
        'quantasVezesPorSemana'=> $this->faker->range(1,6),
        'jaTeveAcompanhamentoNutricional'=> $this->faker->boolean(),
        'oQueMaisGostou'=> $this->faker->sentence(20),
        'oQueNaoFuncionou'=> $this->faker->sentence(20),
        'consentimento'=> $this->faker->boolean(),
        ];
    }
}
