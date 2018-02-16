<?php

/* default/template/account/address_form.twig */
class __TwigTemplate_87826e29cb32b735887e14382ad9d10a5fccb64605e726fdb7b622c73e93f45a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"account-address\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 17
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</h2>
      <form action=\"";
        // line 18
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 21
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 23
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 24
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 25
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
              ";
        }
        // line 26
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 29
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 31
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
              ";
        }
        // line 34
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 37
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 39
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-1\">";
        // line 43
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"address_1\" value=\"";
        // line 45
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1\" class=\"form-control\" />
              ";
        // line 46
        if ((isset($context["error_address_1"]) ? $context["error_address_1"] : null)) {
            // line 47
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_address_1"]) ? $context["error_address_1"] : null);
            echo "</div>
              ";
        }
        // line 48
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-2\">";
        // line 51
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"address_2\" value=\"";
        // line 53
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 57
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"city\" value=\"";
        // line 59
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city\" class=\"form-control\" />
              ";
        // line 60
        if ((isset($context["error_city"]) ? $context["error_city"] : null)) {
            // line 61
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_city"]) ? $context["error_city"] : null);
            echo "</div>
              ";
        }
        // line 62
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 65
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"postcode\" value=\"";
        // line 67
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
              ";
        // line 68
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "</div>
              ";
        }
        // line 70
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 73
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
                <option value=\"\">";
        // line 76
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 79
            echo "                  ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 80
                echo "                
                <option value=\"";
                // line 81
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                
                  ";
            } else {
                // line 84
                echo "                
                <option value=\"";
                // line 85
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                
                  ";
            }
            // line 88
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "              
              </select>
              ";
        // line 91
        if ((isset($context["error_country"]) ? $context["error_country"] : null)) {
            // line 92
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_country"]) ? $context["error_country"] : null);
            echo "</div>
              ";
        }
        // line 93
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 96
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
              </select>
              ";
        // line 100
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            // line 101
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "</div>
              ";
        }
        // line 102
        echo " </div>
          </div>
          ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 105
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 106
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 107
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 109
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 110
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                
                
                
                      ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 115
                    echo "                        ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 116
                        echo "                
                <option value=\"";
                        // line 117
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                
                
                
                        ";
                    } else {
                        // line 122
                        echo "                          
                
                
                <option value=\"";
                        // line 125
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                
                
                
                        ";
                    }
                    // line 130
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                    
              
              
              </select>
              ";
                // line 135
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 136
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 137
                echo "</div>
          </div>
          ";
            }
            // line 140
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 141
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 142
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 145
                    echo "                <div class=\"radio\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 146
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 147
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                    ";
                        // line 148
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  ";
                    } else {
                        // line 150
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 151
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                    ";
                        // line 152
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  ";
                    }
                    // line 153
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo " </div>
              ";
                // line 155
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 156
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 157
                echo " </div>
          </div>
          ";
            }
            // line 160
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 161
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 162
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 165
                    echo "                <div class=\"checkbox\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 166
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 167
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                    ";
                        // line 168
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  ";
                    } else {
                        // line 170
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 171
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                    ";
                        // line 172
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  ";
                    }
                    // line 173
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo " </div>
              ";
                // line 175
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 176
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 177
                echo " </div>
          </div>
          ";
            }
            // line 180
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 181
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 182
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 184
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
              ";
                // line 185
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 186
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 187
                echo " </div>
          </div>
          ";
            }
            // line 190
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 191
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 192
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 194
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
              ";
                // line 195
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 196
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 197
                echo " </div>
          </div>
          ";
            }
            // line 200
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 201
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 202
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 204
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 205
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" />
              ";
                // line 206
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 207
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 208
                echo " </div>
          </div>
          ";
            }
            // line 211
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 212
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 213
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 216
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 220
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 221
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 222
                echo " </div>
          </div>
          ";
            }
            // line 225
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 226
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 227
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 230
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 234
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 235
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 236
                echo " </div>
          </div>
          ";
            }
            // line 239
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 240
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 241
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 244
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 248
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 249
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 250
                echo " </div>
          </div>
          ";
            }
            // line 253
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 255
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 256
        if ((isset($context["default"]) ? $context["default"] : null)) {
            // line 257
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" checked=\"checked\" />
                ";
            // line 259
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" />
                ";
            // line 262
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
              ";
        } else {
            // line 264
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" />
                ";
            // line 266
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" checked=\"checked\" />
                ";
            // line 269
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
              ";
        }
        // line 270
        echo " </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 274
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 276
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 280
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 281
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length-2) {
\t\t\$('.form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}
\t
\tif (\$(this).attr('data-sort') > \$('.form-group').length-2) {
\t\t\$('.form-group:last').after(this);
\t}
\t
\tif (\$(this).attr('data-sort') == \$('.form-group').length-2) {
\t\t\$('.form-group:last').after(this);
\t}
\t
\tif (\$(this).attr('data-sort') < -\$('.form-group').length-2) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;
\t
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t
\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t
\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}
\t
\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t
\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 358
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 363
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 369
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/account/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}
\t\t\t
\t\t\thtml = '<option value=\"\">";
        // line 391
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
\t\t\t
\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t
\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 397
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 404
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}
\t\t\t
\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'country_id\\']').trigger('change');
//--></script> 
";
        // line 417
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 417,  1082 => 404,  1072 => 397,  1063 => 391,  1038 => 369,  1029 => 363,  1021 => 358,  941 => 281,  937 => 280,  930 => 276,  923 => 274,  917 => 270,  912 => 269,  906 => 266,  902 => 264,  897 => 262,  891 => 259,  887 => 257,  885 => 256,  881 => 255,  878 => 254,  872 => 253,  867 => 250,  861 => 249,  859 => 248,  840 => 244,  832 => 241,  823 => 240,  820 => 239,  815 => 236,  809 => 235,  807 => 234,  788 => 230,  780 => 227,  771 => 226,  768 => 225,  763 => 222,  757 => 221,  755 => 220,  736 => 216,  728 => 213,  719 => 212,  716 => 211,  711 => 208,  705 => 207,  703 => 206,  691 => 205,  683 => 204,  678 => 202,  669 => 201,  666 => 200,  661 => 197,  655 => 196,  653 => 195,  637 => 194,  630 => 192,  621 => 191,  618 => 190,  613 => 187,  607 => 186,  605 => 185,  589 => 184,  582 => 182,  573 => 181,  570 => 180,  565 => 177,  559 => 176,  557 => 175,  554 => 174,  547 => 173,  542 => 172,  534 => 171,  531 => 170,  526 => 168,  518 => 167,  515 => 166,  512 => 165,  508 => 164,  503 => 162,  494 => 161,  491 => 160,  486 => 157,  480 => 156,  478 => 155,  475 => 154,  468 => 153,  463 => 152,  455 => 151,  452 => 150,  447 => 148,  439 => 147,  436 => 146,  433 => 145,  429 => 144,  424 => 142,  415 => 141,  412 => 140,  407 => 137,  401 => 136,  399 => 135,  393 => 131,  387 => 130,  377 => 125,  372 => 122,  362 => 117,  359 => 116,  356 => 115,  352 => 114,  345 => 110,  337 => 109,  330 => 107,  321 => 106,  318 => 105,  314 => 104,  310 => 102,  304 => 101,  302 => 100,  295 => 96,  290 => 93,  284 => 92,  282 => 91,  278 => 89,  272 => 88,  264 => 85,  261 => 84,  253 => 81,  250 => 80,  247 => 79,  243 => 78,  238 => 76,  232 => 73,  227 => 70,  221 => 69,  219 => 68,  213 => 67,  208 => 65,  203 => 62,  197 => 61,  195 => 60,  189 => 59,  184 => 57,  175 => 53,  170 => 51,  165 => 48,  159 => 47,  157 => 46,  151 => 45,  146 => 43,  137 => 39,  132 => 37,  127 => 34,  121 => 33,  119 => 32,  113 => 31,  108 => 29,  103 => 26,  97 => 25,  95 => 24,  89 => 23,  84 => 21,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-address" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ text_address }}</h2>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-company">{{ entry_company }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-address-1">{{ entry_address_1 }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="address_1" value="{{ address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1" class="form-control" />*/
/*               {% if error_address_1 %}*/
/*               <div class="text-danger">{{ error_address_1 }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-address-2">{{ entry_address_2 }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="address_2" value="{{ address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-city">{{ entry_city }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="city" value="{{ city }}" placeholder="{{ entry_city }}" id="input-city" class="form-control" />*/
/*               {% if error_city %}*/
/*               <div class="text-danger">{{ error_city }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-postcode">{{ entry_postcode }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" />*/
/*               {% if error_postcode %}*/
/*               <div class="text-danger">{{ error_postcode }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="country_id" id="input-country" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 */
/*                 {% for country in countries %}*/
/*                   {% if country.country_id == country_id %}*/
/*                 */
/*                 <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                 */
/*                   {% else %}*/
/*                 */
/*                 <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                 */
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*               </select>*/
/*               {% if error_country %}*/
/*               <div class="text-danger">{{ error_country }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="zone_id" id="input-zone" class="form-control">*/
/*               </select>*/
/*               {% if error_zone %}*/
/*               <div class="text-danger">{{ error_zone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% for custom_field in custom_fields %}*/
/*           {% if custom_field.type == 'select' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 */
/*                 */
/*                 */
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/*                 */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                 */
/*                 */
/*                 */
/*                         {% else %}*/
/*                           */
/*                 */
/*                 */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                 */
/*                 */
/*                 */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*               */
/*               */
/*               </select>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'radio' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="radio"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %} </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'checkbox' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="checkbox"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %} </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'text' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'textarea' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'file' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}  {{ address_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'date' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*             <div class="col-sm-10"> {% if default %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="1" checked="checked" />*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="0" />*/
/*                 {{ text_no }}</label>*/
/*               {% else %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="1" />*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="0" checked="checked" />*/
/*                 {{ text_no }}</label>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('.form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('.form-group').length-2) {*/
/* 		$('.form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);*/
/* 	}*/
/* 	*/
/* 	if ($(this).attr('data-sort') > $('.form-group').length-2) {*/
/* 		$('.form-group:last').after(this);*/
/* 	}*/
/* 	*/
/* 	if ($(this).attr('data-sort') == $('.form-group').length-2) {*/
/* 		$('.form-group:last').after(this);*/
/* 	}*/
/* 	*/
/* 	if ($(this).attr('data-sort') < -$('.form-group').length-2) {*/
/* 		$('.form-group:first').before(this);*/
/* 	}*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('button[id^=\'button-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
/* 	*/
/* 	$('#form-upload').remove();*/
/* 	*/
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* 	*/
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* 	*/
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* 	*/
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* 		*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.text-danger').remove();*/
/* 					*/
/* 					if (json['error']) {*/
/* 						$(element).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* 					*/
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* 						*/
/* 						$(element).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=account/account/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('input[name=\'postcode\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* 			}*/
/* 			*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* 			*/
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* 					*/
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* 					*/
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* 			*/
/* 			$('select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'country_id\']').trigger('change');*/
/* //--></script> */
/* {{ footer }}*/
