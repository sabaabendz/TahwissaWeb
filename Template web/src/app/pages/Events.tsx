import { motion } from "motion/react";
import { useState } from "react";
import { Calendar, MapPin, Users, Clock, Ticket, Music, Utensils, Palette, Trophy } from "lucide-react";
import { ImageWithFallback } from "../components/figma/ImageWithFallback";

export function Events() {
  const [selectedCategory, setSelectedCategory] = useState("all");

  const categories = [
    { id: "all", label: "Tous", icon: Calendar, color: "from-gray-400 to-gray-600" },
    { id: "music", label: "Musique", icon: Music, color: "from-purple-400 to-purple-600" },
    { id: "food", label: "Gastronomie", icon: Utensils, color: "from-orange-400 to-orange-600" },
    { id: "art", label: "Art & Culture", icon: Palette, color: "from-pink-400 to-pink-600" },
    { id: "sport", label: "Sport", icon: Trophy, color: "from-green-400 to-green-600" },
  ];

  const events = [
    {
      id: 1,
      category: "music",
      title: "Festival Summer Beats",
      location: "Paris, France",
      date: "15 Juillet 2026",
      time: "18:00 - 23:00",
      attendees: "5,000+ participants",
      price: "€85",
      image: "https://images.unsplash.com/photo-1672841821756-fc04525771c2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtdXNpYyUyMGZlc3RpdmFsJTIwY29uY2VydCUyMGNyb3dkfGVufDF8fHx8MTc3NTIyNDQyOXww&ixlib=rb-4.1.0&q=80&w=1080",
      featured: true,
    },
    {
      id: 2,
      category: "food",
      title: "Marché Gastronomique",
      location: "Lyon, France",
      date: "22 Juillet 2026",
      time: "10:00 - 20:00",
      attendees: "2,500+ participants",
      price: "Gratuit",
      image: "https://images.unsplash.com/photo-1675674683873-1232862e3c64?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxmb29kJTIwZmVzdGl2YWwlMjBtYXJrZXR8ZW58MXx8fHwxNzc1MjIyMTAwfDA&ixlib=rb-4.1.0&q=80&w=1080",
      featured: false,
    },
    {
      id: 3,
      category: "art",
      title: "Exposition d'Art Moderne",
      location: "Marseille, France",
      date: "1 Août 2026",
      time: "09:00 - 18:00",
      attendees: "1,200+ participants",
      price: "€25",
      image: "https://images.unsplash.com/photo-1719935115623-4857df23f3c6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhcnQlMjBleGhpYml0aW9uJTIwZ2FsbGVyeXxlbnwxfHx8fDE3NzUyMTM4NDR8MA&ixlib=rb-4.1.0&q=80&w=1080",
      featured: false,
    },
    {
      id: 4,
      category: "sport",
      title: "Match de Football",
      location: "Nice, France",
      date: "10 Août 2026",
      time: "20:45 - 22:30",
      attendees: "30,000+ participants",
      price: "€55",
      image: "https://images.unsplash.com/photo-1764050359179-517599dab87b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzcG9ydHMlMjBldmVudCUyMHN0YWRpdW18ZW58MXx8fHwxNzc1MjI0NDMwfDA&ixlib=rb-4.1.0&q=80&w=1080",
      featured: true,
    },
  ];

  const filteredEvents = selectedCategory === "all" 
    ? events 
    : events.filter(e => e.category === selectedCategory);

  return (
    <div className="container mx-auto px-6 py-12">
      {/* Header */}
      <motion.div
        initial={{ opacity: 0, y: -20 }}
        animate={{ opacity: 1, y: 0 }}
        className="mb-12"
      >
        <h1 className="text-5xl font-bold text-white mb-4 drop-shadow-lg">
          Événements
        </h1>
        <p className="text-xl text-white/90 drop-shadow-md">
          Découvrez les meilleurs événements et festivals
        </p>
      </motion.div>

      {/* Category Filter */}
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ delay: 0.2 }}
        className="mb-8 flex flex-wrap gap-3"
      >
        {categories.map((category, index) => {
          const Icon = category.icon;
          const isActive = selectedCategory === category.id;
          
          return (
            <motion.button
              key={category.id}
              initial={{ opacity: 0, scale: 0 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 0.1 * index, type: "spring" }}
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              onClick={() => setSelectedCategory(category.id)}
              className={`px-6 py-3 rounded-2xl font-semibold shadow-lg transition-all ${
                isActive
                  ? `bg-gradient-to-r ${category.color} text-white`
                  : "bg-white/90 backdrop-blur-md text-gray-700 hover:bg-white"
              }`}
            >
              <div className="flex items-center gap-2">
                <Icon className="w-5 h-5" />
                <span>{category.label}</span>
              </div>
            </motion.button>
          );
        })}
      </motion.div>

      {/* Events Grid */}
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
        {filteredEvents.map((event, index) => {
          const CategoryIcon = categories.find(c => c.id === event.category)?.icon || Calendar;
          
          return (
            <motion.div
              key={event.id}
              initial={{ opacity: 0, scale: 0.9 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 0.1 * index }}
              whileHover={{ scale: 1.02, y: -5 }}
              className="group relative bg-white/90 backdrop-blur-md rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all cursor-pointer"
            >
              {/* Featured Badge */}
              {event.featured && (
                <motion.div
                  initial={{ rotate: -45, opacity: 0 }}
                  animate={{ rotate: 0, opacity: 1 }}
                  className="absolute top-4 right-4 z-10 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg"
                >
                  ⭐ Populaire
                </motion.div>
              )}

              {/* Image */}
              <div className="relative h-64 overflow-hidden">
                <motion.div
                  whileHover={{ scale: 1.1 }}
                  transition={{ duration: 0.6 }}
                  className="w-full h-full"
                >
                  <ImageWithFallback
                    src={event.image}
                    alt={event.title}
                    className="w-full h-full object-cover"
                  />
                </motion.div>
                
                {/* Gradient Overlay */}
                <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent" />
                
                {/* Category Icon */}
                <motion.div
                  initial={{ scale: 0 }}
                  animate={{ scale: 1 }}
                  transition={{ delay: 0.3 }}
                  className="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-lg"
                >
                  <CategoryIcon className="w-6 h-6 text-blue-600" />
                </motion.div>
              </div>

              {/* Content */}
              <div className="p-6">
                <h3 className="text-2xl font-bold text-gray-800 mb-3">
                  {event.title}
                </h3>

                <div className="space-y-2 mb-6">
                  <div className="flex items-center gap-2 text-gray-600">
                    <MapPin className="w-4 h-4 text-blue-600" />
                    <span>{event.location}</span>
                  </div>
                  
                  <div className="flex items-center gap-2 text-gray-600">
                    <Calendar className="w-4 h-4 text-blue-600" />
                    <span>{event.date}</span>
                  </div>
                  
                  <div className="flex items-center gap-2 text-gray-600">
                    <Clock className="w-4 h-4 text-blue-600" />
                    <span>{event.time}</span>
                  </div>
                  
                  <div className="flex items-center gap-2 text-gray-600">
                    <Users className="w-4 h-4 text-blue-600" />
                    <span>{event.attendees}</span>
                  </div>
                </div>

                <div className="flex items-center justify-between pt-4 border-t border-gray-200">
                  <div>
                    <div className="text-sm text-gray-500">Prix</div>
                    <div className="text-2xl font-bold text-blue-600">
                      {event.price}
                    </div>
                  </div>

                  <motion.button
                    whileHover={{ scale: 1.05 }}
                    whileTap={{ scale: 0.95 }}
                    className="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl font-semibold shadow-lg flex items-center gap-2"
                  >
                    <Ticket className="w-5 h-5" />
                    <span>Réserver</span>
                  </motion.button>
                </div>
              </div>

              {/* Animated Border on Hover */}
              <motion.div
                className="absolute inset-0 rounded-3xl border-2 border-blue-500 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"
                animate={{
                  scale: [1, 1.02, 1],
                }}
                transition={{
                  duration: 2,
                  repeat: Infinity,
                }}
              />
            </motion.div>
          );
        })}
      </div>

      {/* Floating Calendar Icon */}
      <motion.div
        className="fixed bottom-8 left-8"
        initial={{ scale: 0, rotate: 180 }}
        animate={{ scale: 1, rotate: 0 }}
        transition={{ delay: 0.8, type: "spring" }}
      >
        <motion.div
          animate={{ 
            y: [0, -10, 0],
            rotate: [0, 5, -5, 0],
          }}
          transition={{ duration: 3, repeat: Infinity }}
          className="bg-gradient-to-r from-purple-500 to-pink-600 p-4 rounded-full shadow-2xl cursor-pointer"
        >
          <Calendar className="w-8 h-8 text-white" />
        </motion.div>
      </motion.div>
    </div>
  );
}
