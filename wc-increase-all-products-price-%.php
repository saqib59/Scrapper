if increase 20% write 1.20
if decrease 20% write 0.80


UPDATE roof_postmeta
SET meta_value = ROUND(meta_value * 1.20, 2)
WHERE meta_key = '_price';

UPDATE roof_postmeta
SET meta_value = ROUND(meta_value * 1.20, 2)
WHERE meta_key = '_regular_price';

UPDATE roof_postmeta
SET meta_value = ROUND(meta_value * 1.20, 2)
WHERE meta_key = '_sale_price' AND meta_value != '';

DELETE FROM `roof_options`
WHERE (`option_name` LIKE '_transient_wc_var_prices_%'
OR `option_name` LIKE '_transient_timeout_wc_var_prices_%');
