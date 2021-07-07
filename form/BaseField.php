<?php


namespace sajjaddarre\phpmvc\form;


use sajjaddarre\phpmvc\Model;

abstract class BaseField
{
    public Model $model;
    public string $attribute;

    public function __construct($model, $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput():string;

    public function __toString(): string
    {
        return sprintf('           <div class="form-group">
               <label >%s</label>
               %s
               <div class="invalid-feedback">
               %s
</div>
           </div>', $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute));
    }
}