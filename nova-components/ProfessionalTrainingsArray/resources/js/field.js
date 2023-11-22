import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-professional-trainings-array', IndexField)
  app.component('detail-professional-trainings-array', DetailField)
  app.component('form-professional-trainings-array', FormField)
})
