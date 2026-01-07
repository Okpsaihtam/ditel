/**
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 */
function stop(entity) {
    $.ajaxq.clear(entity + "Sync");
    $.ajaxq.clear(entity + "Delete");
}

function regenerate(entity) {
    $('#' + entity + '-imgs .img-stop').removeAttr('disabled');
    let oneImagePercent = 100;

    if (imageList[entity].todo.length > 0) {
        oneImagePercent = 100 / imageList[entity].todo.length;

    }
    for (var i = 0; i < imageList[entity].todo.length; i++) {
        toastr.clear();
        updateProgressBar($('#' + entity + '-imgs .progress-bar'), 0);
        let current = i;
        $.ajaxq(entity + "Sync", {
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'regenerate',
                image: imageList[entity].todo[i],
                currentIndex: i,
                type: entity,
                ajax: true
            },
        }).success(function (response) {
            if (response.success) {
                toastr.success(entity + ' image ' + imageList[entity].todo[current] + ' regenerated');
            } else {
                toastr.error(response.error);
            }
            updateProgressBar($('#' + entity + '-imgs .progress-bar'), oneImagePercent * (current + 1));
            updateProgressNumbers($('#' + entity + '-imgs .img-completed'), (current + 1));
            setEntityProgress(entity, current);
            if (oneImagePercent * (current + 1) === 100) {
                $('#' + entity + '-imgs .img-stop').attr('disabled', 'true');
            }
        }).error(function (response) {
            toastr.error(entity + ' image ' + imageList[entity].todo[current] + ' regeneration failed');
        });
    }
}

function resume(entity) {
    $('#' + entity + '-imgs .img-stop').removeAttr('disabled');
    let oneImagePercent = 100;

    if (imageList[entity].todo.length > 0) {
        oneImagePercent = 100 / imageList[entity].todo.length;
    }
    for (var i = 0; i < imageList[entity].todo.length; i++) {
        if (i < getEntityProgress(entity)) {
            continue;
        }
        toastr.clear();
        let current = i;
        $.ajaxq(entity + "Sync", {
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'regenerate',
                image: imageList[entity].todo[i],
                currentIndex: i,
                type: entity,
                ajax: true
            },
        }).success(function (response) {
            if (response.success) {
                toastr.success(entity + ' image ' + imageList[entity].todo[current] + ' regenerated');
            } else {
                toastr.error(response.error);
            }
            updateProgressBar($('#' + entity + '-imgs .progress-bar'), oneImagePercent * (current + 1));
            updateProgressNumbers($('#' + entity + '-imgs .img-completed'), (current + 1));
            setEntityProgress(entity, current);
            if (oneImagePercent * (current + 1) === 100) {
                $('#' + entity + '-imgs .img-stop').attr('disabled', 'true');
            }
        }).error(function (response) {
            toastr.error(entity + ' image ' + imageList[entity].todo[current] + ' regeneration failed');
        });
    }
}

function deleteImage(entity) {
    if (!confirm("Are you sure? You can always regenerate the JPG files if needed")) {
        return;
    }
    let oneImagePercent = 100;

    if (imageList[entity].todo.length > 0) {
        oneImagePercent = 100 / imageList[entity].todo.length;
        console.log();
    }
    for (var i = 0; i < imageList[entity].todo.length; i++) {
        toastr.clear();
        updateProgressBar($('#' + entity + '-imgs .progress-bar'), 0);
        let current = i;
        $.ajaxq(entity + "Delete", {
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'delete',
                image: imageList[entity].todo[i],
                type: entity,
                ajax: true
            },
        }).success(function (response) {
            if (response.success) {
                toastr.success(entity + ' image ' + imageList[entity].todo[current] + ' deleted');
            } else {
                toastr.error(response.error);
            }
            updateProgressBar($('#' + entity + '-imgs .progress-bar'), oneImagePercent * (current + 1));
            updateProgressNumbers($('#' + entity + '-imgs .img-completed'), (current + 1));
        }).error(function (response) {
            toastr.error(entity + ' image ' + imageList[entity].todo[current] + ' delete failed');
        });
    }
}

function updateProgressNumbers(element, current) {
    $(element).text(current);
}

function updateProgressBar(element, percent) {
    percent = percent.toFixed(2);
    $(element).css('width', percent + "%");
    $(element).attr('aria-valuenow', percent);
    $(element).attr('valuenow', percent);
    $(element).find('.sr-percent').text(percent);
}

function getEntityProgress(entity) {
    let entities = {
        product: productProgress,
        category: categoryProgress,
        supplier: supplierProgress,
        manufacturer: manufacturerProgress,
        store: storeProgress
    };
    return entities[entity];
}

function setEntityProgress(entity, progress) {
    let entities = {
        product: productProgress,
        category: categoryProgress,
        supplier: supplierProgress,
        manufacturer: manufacturerProgress,
        store: storeProgress
    };

    productProgress = progress;
}

document.addEventListener("DOMContentLoaded", function () {
    oneImagePercent = 100 / imageList['product'].todo.length;
    updateProgressBar($('#product-imgs .progress-bar'), oneImagePercent * (productProgress + 1));
    updateProgressNumbers($('#product-imgs .img-completed'), (productProgress + 1));

    oneImagePercent = 100 / imageList['category'].todo.length;
    updateProgressBar($('#category-imgs .progress-bar'), oneImagePercent * (categoryProgress + 1));
    updateProgressNumbers($('#category-imgs .img-completed'), (categoryProgress + 1));

    oneImagePercent = 100 / imageList['supplier'].todo.length;
    updateProgressBar($('#supplier-imgs .progress-bar'), oneImagePercent * (supplierProgress + 1));
    updateProgressNumbers($('#supplier-imgs .img-completed'), (supplierProgress + 1));

    oneImagePercent = 100 / imageList['manufacturer'].todo.length;
    updateProgressBar($('#manufacturer-imgs .progress-bar'), oneImagePercent * (manufacturerProgress + 1));
    updateProgressNumbers($('#manufacturer-imgs .img-completed'), (manufacturerProgress + 1));

    oneImagePercent = 100 / imageList['store'].todo.length;
    updateProgressBar($('#store-imgs .progress-bar'), oneImagePercent * (storeProgress + 1));
    updateProgressNumbers($('#store-imgs .img-completed'), (storeProgress + 1));
});
