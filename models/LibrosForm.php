<?php

namespace app\models;

use yii\base\Model;

/**
 * Modelo para el formulario de crear libros.
 *
 * Los libros continen:
 *
 * - Titulo.
 * - Autor.
 */
class LibrosForm extends Model
{
    public $titulo;
    public $autor;

    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['autor'], 'safe'],
        ];
    }

public function attributeLabels()
{
    return [
        'titulo' => 'Título',
        'autor' => 'Autor',
    ];
}
}