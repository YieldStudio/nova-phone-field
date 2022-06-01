import IndexField from './components/IndexField';
import DetailField from './components/DetailField';
import FormField from './components/FormField';

Nova.booting(app => {
    app.component('index-nova-phone-field', IndexField);
    app.component('detail-nova-phone-field', DetailField);
    app.component('form-nova-phone-field', FormField);
});
